<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Rest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class AttendanceController extends Controller
{
    public function getIndex()
    {
        $dt = Carbon::now();
        $attendance = Attendance::where('user_id', Auth::id())->where('date', $dt->format('Y-m-d'))->first();
        if($attendance){
            if($attendance->end_time){
                $is_atte_start_time = false;
                $is_atte_end_time = false;
            } else {
                $is_atte_start_time = false;
                $is_atte_end_time = true;
            }
        } else {
            $is_atte_start_time = true;
            $is_atte_end_time = false;
        }
        //ボタンを押せないようにする(休憩は1回のみ、なしでも可)
        $rest = Rest::where('attendance_id', Auth::id())->get();
        if($rest){
            if($rest->end_time){
                $is_atte_start_time = false;
                $is_atte_end_time = false;
            } else {
                $is_atte_start_time = false;
                $is_atte_end_time = true;
            }
        } else {
            $is_atte_start_time = true;
            $is_atte_end_time = false;
        }
        return view('attendance', compact('is_atte_start_time', 'is_atte_end_time'));
    }

    public function startAttendance()
    {
        $dt = Carbon::now();

        Attendance::create([
            'user_id' => Auth::id(),
            'date' => $dt->format('Y-m-d'),
            'start_time' => $dt->format('H:i:s'),
        ]);

        return redirect('/');
    }

    public function endAttendance()
    {
        $dt = Carbon::now();

        // 今日の日付のAttendanceを取得
        $attendance = Attendance::where('date', $dt->format('Y-m-d'))->first();

        // そのAttendanceを更新
        Attendance::find($attendance->id)->update([
            'end_time' => $dt->format('H:i:s')
        ]);

        return redirect('/');
    }

    public function getAttendance()
    {
        $items = Attendance::simplePagenate(5);
        return view('date', ['items'=>$items]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function getIndex()
    {
        return view('attendance');
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
        // そのAttendanceを更新

        return redirect('/');
    }

    public function getAttendance()
    {
        $items = Attendance::simplePagenate(5);
        return view('date', ['items'=>$items]);
    }
}

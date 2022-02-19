<?php

namespace App\Http\Controllers;

use App\Models\Rest;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class RestController extends Controller
{
    //startとendを作る(Attendanceをマネする)
    public function startRest()
    {
        $dt = Carbon::now();

        $attendance = Attendance::where('date', $dt->format('Y-m-d'))->where('user_id', Auth::id())->first();

        Rest::create([
            'attendance_id' => $attendance->id,
            'start_time' => $dt->format('H:i:s'),
        ]);

        return redirect('/');
    }

    public function endRest()
    {
        $dt = Carbon::now();

        // 今日の日付のRestを取得
        $attendance = Attendance::where('date', $dt->format('Y-m-d'))->where('user_id', Auth::id())->first();
        $rest = Rest::where('attendance_id', $attendance->id)->latest()->first();

        // そのRestを更新
        $rest->update([
            'end_time' => $dt->format('H:i:s')
        ]);

        return redirect('/');
    }
}

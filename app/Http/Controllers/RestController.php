<?php

namespace App\Http\Controllers;

use App\Models\Rest;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RestController extends Controller
{
    //startとendを作る(Attendanceをマネする)
    public function startRest()
    {
        $dt = Carbon::now();

        Rest::create([
            'attendance_id' => Attendance::id(),
            'start_time' => $dt->format('H-i-s'),
        ]);

        return redirect('/');
    }

    public function endRest()
    {
        $dt = Carbon::now();
        $rest_id = Attendance::id();

        // 今日の日付のRestを取得
        $rest = Rest::where('attendance_id', $rest_id);

        // そのRestを更新
        Attendance::find($rest->id)->update([
            'start_time' => $dt->format('H:i:s'),
            'end_time' => $dt->format('H:i:s')
        ]);

        return redirect('/');
    }
}

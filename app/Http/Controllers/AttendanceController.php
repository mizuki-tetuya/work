<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function getIndex()
    {
        return view('attendance');
    }
    public function startAttendance()
    {
        require 'vendor/autoload.php';
        $dt=Carbon::now();
        return view('date',["date"=>$dt]);
    }
    public function endAttendance()
    {
        require 'vendor/autoload.php';
        $dt=Carbon::now();
        return view('date', ["endDates=>$dt"]);
    }
    public function getAttendance()
    {
        $items = Attendance::simplePagenate(5);
        return view('date', ['items'=>$items]);
    }

}

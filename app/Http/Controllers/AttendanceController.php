<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function getIndex()
    {
        return view('date');
    }
    public function startAttendance()
    {

    }
    public function endAttendance()
    {

    }
    public function getAttendance()
    {
        return view('attendance');
    }

}

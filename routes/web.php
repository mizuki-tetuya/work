<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RestController;

Route::get('/', [AttendanceController::class, 'getIndex']);
Route::get('/attendance/start', [AttendanceController::class, 'startAttendance']);
Route::get('/attendance/end', [AttendanceController::class, 'endAttendance']);
Route::get('/attendance/{num}', [AttendanceController::class, 'getAttendance']);
Route::get('/break/start', [RestController::class, 'startRest']);
Route::get('/break/end', [RestController::class, 'endRest']);
Route::get('/resister', [AuthController::class, 'getResister']);
Route::post('/resister',[AuthController::class, 'postResister'])->name('postResister');
Route::get('/login', [AuthController::class, 'getLogin']);
Route::post('/login', [AuthController::class, 'postLogin']);
Route::post('/logout', [AuthController::class, 'postLogout']);
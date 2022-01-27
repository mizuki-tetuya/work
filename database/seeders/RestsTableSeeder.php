<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rests')->insert([
            'attendance_id'=>1,
            'start_time'=>'12:40',
            'end_time'=>'13:39'
        ]);
        DB::table('rests')->insert([
            'attendance_id'=>2,
            'start_time'=>'11:40',
            'end_time'=>'12:39'
        ]);
        DB::table('rests')->insert([
            'attendance_id'=>3,
            'start_time'=>'13:40',
            'end_time'=>'14:30'
        ]);
        DB::table('rests')->insert([
            'attendance_id'=>4,
            'start_time'=>'12:40',
            'end_time'=>'13:49'
        ]);
        DB::table('rests')->insert([
            'attendance_id'=> 1,
            'start_time'=>'18:30',
            'end_time'=>'18:39'
        ]);
        DB::table('rests')->insert([
            'attendance_id'=>3,
            'start_time'=>'14:40',
            'end_time'=>'15:00'
        ]);
        DB::table('rests')->insert([
            'attendance_id'=> 2,
            'start_time'=>'17:40',
            'end_time'=>'18:02'
        ]);
    }
}
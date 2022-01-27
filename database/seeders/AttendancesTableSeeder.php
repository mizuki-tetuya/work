<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendances')->insert([
            'user_id'=> 1,
            'date'=> '2022-01-15',
            'start_time'=> '08:10',
            'end_time'=>'20:10'
        ]);
        DB::table('attendances')->insert([
            'user_id'=> 2,
            'date'=> '2022-01-15',
            'start_time'=> '09:10',
            'end_time'=>'19:10'
        ]);
        DB::table('attendances')->insert([
            'user_id'=> 3,
            'date'=> '2022-01-15',
            'start_time'=> '7:10',
            'end_time'=>'10:10'
        ]);
        DB::table('attendances')->insert([
            'user_id'=> 4,
            'date'=> '2022-01-15',
            'start_time'=> '08:12',
            'end_time'=>'20:10'
        ]);
        DB::table('attendances')->insert([
            'user_id'=> 1,
            'date'=> '2022-01-16',
            'start_time'=> '08:20',
            'end_time'=>'20:00'
        ]);
        DB::table('attendances')->insert([
            'user_id'=> 2,
            'date'=> '2022-01-16',
            'start_time'=> '08:30',
            'end_time'=>'20:19'
        ]);
        DB::table('attendances')->insert([
            'user_id'=> 3,
            'date'=> '2022-01-16',
            'start_time'=> '08:10',
            'end_time'=>'20:50'
        ]);
    }
}

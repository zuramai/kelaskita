<?php

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::insert([
            ['subject_id' => 1, 'day_id' => 1, 'start_time' => '06:30:00', 'end_time' => '08:00:00'],
            ['subject_id' => 2, 'day_id' => 1, 'start_time' => '08:00:00', 'end_time' => '09:30:00'],
            ['subject_id' => 3, 'day_id' => 1, 'start_time' => '10:00:00', 'end_time' => '11:30:00'],
            ['subject_id' => 4, 'day_id' => 1, 'start_time' => '13:00:00', 'end_time' => '15:00:00'],

            ['subject_id' => 5, 'day_id' => 2, 'start_time' => '06:30:00', 'end_time' => '08:00:00'],
            ['subject_id' => 6, 'day_id' => 2, 'start_time' => '08:00:00', 'end_time' => '09:30:00'],
            ['subject_id' => 7, 'day_id' => 2, 'start_time' => '10:00:00', 'end_time' => '11:30:00'],
            ['subject_id' => 8, 'day_id' => 2, 'start_time' => '13:00:00', 'end_time' => '15:00:00'],

            ['subject_id' => 9, 'day_id' => 3, 'start_time' => '06:30:00', 'end_time' => '08:00:00'],
            ['subject_id' => 10, 'day_id' => 3, 'start_time' => '08:00:00', 'end_time' => '09:30:00'],
            ['subject_id' => 11, 'day_id' => 3, 'start_time' => '10:00:00', 'end_time' => '11:30:00'],
            ['subject_id' => 1, 'day_id' => 3, 'start_time' => '13:00:00', 'end_time' => '15:00:00'],

            ['subject_id' => 4, 'day_id' => 4, 'start_time' => '06:30:00', 'end_time' => '08:00:00'],
            ['subject_id' => 3, 'day_id' => 4, 'start_time' => '08:00:00', 'end_time' => '09:30:00'],
            ['subject_id' => 6, 'day_id' => 4, 'start_time' => '10:00:00', 'end_time' => '11:30:00'],
            ['subject_id' => 7, 'day_id' => 4, 'start_time' => '13:00:00', 'end_time' => '15:00:00'],

            ['subject_id' => 2, 'day_id' => 5, 'start_time' => '06:30:00', 'end_time' => '08:00:00'],
            ['subject_id' => 6, 'day_id' => 5, 'start_time' => '08:00:00', 'end_time' => '09:30:00'],
            ['subject_id' => 9, 'day_id' => 5, 'start_time' => '10:00:00', 'end_time' => '11:30:00'],
            ['subject_id' => 11, 'day_id' => 5, 'start_time' => '13:00:00', 'end_time' => '15:00:00'],
        ]);
    }
}

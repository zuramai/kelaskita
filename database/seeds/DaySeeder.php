<?php

use Illuminate\Database\Seeder;
use App\Models\Day;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Day::insert([
            ['name' => 'Senin'],
            ['name' => 'Selasa'],
            ['name' => 'Rabu'],
            ['name' => 'Kamis'],
            ['name' => 'Jumat'],
            ['name' => 'Sabtu'],
            ['name' => 'Minggu']
        ]);
    }
}

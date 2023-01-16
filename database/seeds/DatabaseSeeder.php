<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(DaySeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(SettingSeeder::class);
    }
}

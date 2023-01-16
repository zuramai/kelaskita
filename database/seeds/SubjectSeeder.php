<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::insert([
            ['name' => 'Matematika'],
            ['name' => 'Bahasa Indonesia'],
            ['name' => 'Bahasa Inggris'],
            ['name' => 'Bahasa Jepang'],
            ['name' => 'IPA'],
            ['name' => 'IPS'],
            ['name' => 'PPKN'],
            ['name' => 'Pendidikan Agama'],
            ['name' => 'Pemrograman Web'],
            ['name' => 'Pemrograman Android'],
            ['name' => 'Basis Data'],
        ]);
    }
}

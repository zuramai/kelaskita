<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            ['key' => 'WEB_TITLE', 'value' => 'Kelaskita'],
            ['key' => 'WEB_LOGO_WHITE', 'value' => 'logo_white.png'],
            ['key' => 'WEB_LOGO', 'value' => 'logo.png'],
            ['key' => 'WEB_FAVICON', 'value' => 'favicon.png'],
            ['key' => 'HERO_TEXT_HEADER', 'value' => 'Selamat Datang di'],
            ['key' => 'HERO_TEXT_DESCRIPTION', 'value' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas deserunt, tenetur fuga fugiat quisquam recusandae quo sit eligendi nostrum. Maxime illo possimus necessitatibus natus totam.'],
            ['key' => 'HERO_BACKGROUND_IMAGE', 'value' => 'bersama2.jpg'],
        ]);
    }
}

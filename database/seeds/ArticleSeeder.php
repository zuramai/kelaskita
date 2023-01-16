<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        Article::insert(['title' => 'Website XII-RPL Telah Dibuka!', 'author_id' => 1, 'thumbnail_image_name' => 'article1.jpg', 'content' => $faker->paragraph(5, true)]);
        Article::insert(['title' => 'Cara Melihat Jadwal Pelajaran', 'author_id' => 1, 'thumbnail_image_name' => 'article2.jpg', 'content' => $faker->paragraph(5, true)]);
        Article::insert(['title' => 'Fitur-fitur Website Kelaskita', 'author_id' => 1, 'thumbnail_image_name' => 'article3.jpg', 'content' => $faker->paragraph(5, true)]);
    }
}

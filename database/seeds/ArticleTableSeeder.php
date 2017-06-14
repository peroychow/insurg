<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
          'title' => str_random(12),
          'content' => str_random(500),
          'author' => "1",
          'image' => str_random(10)
        ]);
    }
}

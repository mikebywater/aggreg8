<?php

use App\Article;
use Illuminate\Database\Seeder;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Article::create([
              "url"  => "http://tottenhamhotspur.com",
              "title" => "Spurs Sign Son",
              "content" => "Spurs sign South Korean striker Son for 22 million euros",
               "image" => "http://e2.365dm.com/15/09/150x150/heung-min-son-spurs_3352257.jpg",
               "source_id" => "1"
        ]);

    }
}

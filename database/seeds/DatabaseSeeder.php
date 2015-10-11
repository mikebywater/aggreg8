<?php


use App\Article;
use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        User::truncate();
        Article::truncate();


        $this->call('UserSeeder');
        $this->call('ArticleSeeder');


        Model::reguard();
    }
}

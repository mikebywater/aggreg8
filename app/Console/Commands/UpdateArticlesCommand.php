<?php

namespace App\Console\Commands;

use App\Article;
use Illuminate\Console\Command;

class UpdateArticlesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateArticles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the articles table by scraping the services.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        Article::truncate();
        Article::create([
            "url"  => "http://tottenhamhotspur.com",
            "title" => "Spurs Sign Son",
            "content" => "Spurs sign South Korean striker Son for 22 million euros",
            "image" => "http://e2.365dm.com/15/09/150x150/heung-min-son-spurs_3352257.jpg"
            //https://placehold.it/150x150
        ]);
    }
}

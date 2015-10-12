<?php

namespace App\Console\Commands;

use App\Events\UpdateArticles;
use App\Article;
use Illuminate\Console\Command;

class UpdateArticlesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateArticlesCommand';

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

        event(new UpdateArticles());



    }
}

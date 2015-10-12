<?php

namespace App\Listeners;

use App\Events\UpdateArticles;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateArticlesInDB
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  UpdateArticles  $event
     * @return void
     */
    public function handle(UpdateArticles $event)
    {
              $event->update();
    }
}

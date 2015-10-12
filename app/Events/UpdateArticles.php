<?php

namespace App\Events;

use App\Article;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UpdateArticles extends Event
{
    use SerializesModels;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function update()
    {
        Article::truncate();
        Article::create([
            "url"  => "http://tottenhamhotspur.com",
            "title" => "Spurs Sign Sonny Jim",
            "content" => "Spurs sign South Korean striker Son for 22 million euros",
            "image" => "http://e2.365dm.com/15/09/150x150/heung-min-son-spurs_3352257.jpg"
                //https://placehold.it/150x150
        ]);
    }


    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}

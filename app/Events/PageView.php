<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PageView extends Event
{
    use SerializesModels;
    public $route;
    public $user_id;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($route, $user_id)
    {
        $this->route = $route;
        $this->user_id;
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

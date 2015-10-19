<?php

namespace App\Listeners;

use App\Events\PageView;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterPageView
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PageView  $event
     * @return void
     */
    public function handle(PageView $event)
    {

        \App\PageView::create([
            "route"  => $event->route,
            "user_id" => $event->user_id
        ]);
    }
}

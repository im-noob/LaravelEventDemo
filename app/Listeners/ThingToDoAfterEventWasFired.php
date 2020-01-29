<?php

namespace App\Listeners;

use App\Events\ActionDone;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;

class ThingToDoAfterEventWasFired
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
     * @param  ActionDone  $event
     * @return void
     */
    public function handle(ActionDone $event)
    {
        $message = Carbon::now()->toDateTimeString() .": ".$event->request->user()->name . ' just logged in to the application.';
        Storage::append('loginactivity.txt', $message);
    }
}

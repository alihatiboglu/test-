<?php

namespace App\Listeners;

use App\Events\welcomeuser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Support\Facades\Mail;
use App\Mail\welcome;

class welcomeuserlistener
{

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  welcomeuser  $event
     * @return void
     */
    public function handle(welcomeuser $event)
    {
        Mail::to($event->user)->send(new welcome());
    }
}

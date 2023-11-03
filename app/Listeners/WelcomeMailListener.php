<?php

namespace App\Listeners;

use App\Events\WelcomeMailEvent;
use App\Mail\WelcomeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeMailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(WelcomeMailEvent $event): void
    {
        $user = $event->user;

        $when = now()->addMinutes(5);
        Mail::to($user->email)->later($when, new WelcomeMail($user));
    }
}

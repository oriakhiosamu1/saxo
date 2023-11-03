<?php

namespace App\Listeners;

use App\Events\PasswordEvent;
use App\Mail\PasswordMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class PasswordListener
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
    public function handle(PasswordEvent $event): void
    {
        $email = $event->email;

        $when = now()->addMinutes(5);

        Mail::to($email)->later($when, new PasswordMail($email));
    }
}

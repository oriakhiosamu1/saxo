<?php

namespace App\Listeners;

use App\Events\UpgradePlanEvent;
use App\Mail\UpgradePlanMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class UpgradePlanListener
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
    public function handle(UpgradePlanEvent $event): void
    {
        $user = $event->user;

        $when = now()->addMinutes(5);

        Mail::to($user->email)->later($when, new UpgradePlanMail($user));
    }
}

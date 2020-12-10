<?php

namespace App\Listeners;

use App\Events\EmailNotificationEvent;
use App\Jobs\ProcessMailJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class FireEmailNotification
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
     * @param  object  $event
     */
    public function handle(EmailNotificationEvent $event)
    {
        if (!config('mail.send_mail')) {
            return '';
        }
        dispatch(new ProcessMailJob($event->model));
    }
}

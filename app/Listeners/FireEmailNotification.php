<?php

namespace App\Listeners;

use App\Events\EmailNotificationEvent;
use App\Jobs\ProcessMailJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\CcpaEmail;
use Illuminate\Support\Facades\Mail;

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
        Mail::to($event->model['to_email'])->send(new CcpaEmail($event->model));
        /**
         * Commented below line due to pending installation of Laravel supervisor
         * Will un-comment once it will be installed and queue process will be started.
         *
            dispatch(new ProcessMailJob($event->model));
         *
         * */
    }
}

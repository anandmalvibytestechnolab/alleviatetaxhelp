<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CcpaEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $model;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $validData = $this->model['validData'];
        return $this
                ->from(config('mail.from.address'))
                ->view('mails.ccpa', compact('validData'));
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscribeEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $action;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $action)
    {
        $this->name = $name;
        $this->action = $action;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.subscribe_email')->with(['name' => $this->name, 'action' => $this->action]);
    }
}

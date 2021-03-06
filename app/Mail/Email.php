<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;

    /**
     * Constructor method
     *
     * @param string $subject E-mail subject
     */
    public function __construct($subject = null)
    {
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.invite')
        ->from(APPLICATION_EMAIL_ADDRESS, APPLICATION_EMAIL_NAME)
        ->subject($this->subject);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSender extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $fullname;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname, $message)
    {
        //
        $this->fullname = $fullname;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('mail.contact');
        // return $this->to($this->data->mail)->markdown('mail.box')->subject($this->data->subject);
        return $this->subject('Mail from Altair')->from('ghannou.0702@gmail.com', 'Altair ibn-la-ahad')->markdown('mail.contact');
    }
}

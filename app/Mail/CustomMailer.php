<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ot, $text)
    {
        $this->text = $text;
        $this->ot = $ot;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from([$this->ot])->view('mails.testmail', [
            'text' => $this->text]);
    }
}

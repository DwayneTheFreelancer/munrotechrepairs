<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        // Send data to a view template of how the mail will be sent to me
        // Makes request for all the data in the form to be sent before sending to my mailgun API

        return $this->view('mail', ['name' => $request->name, 'email' => $request->email, 'comment' => $request->comment])->to('postmaster@sandbox158106dc76ce45f2ba98015bd1fb337f.mailgun.org');

    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;
use App\User;
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
    public function build(request $request)
    {
        // return $this->view('mailTemplate',['msg'=>$request->message])->to($request->EmailAdrs);
        $adrs = $request->EmailAdrs;
        $mail2 = ['nazmulhaqued@gmail.com', $adrs];
        
        return $this->view('mailTemplate',['msg'=>$request->message])->to($mail2);
    }
}


['myoneemail@esomething.com', 'myother@esomething.com','myother2@esomething.com'];
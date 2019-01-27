<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendMail;
class mailController extends Controller
{
   public function send(){
   	 Mail::send(new sendMail());
   }

   public function sendAdvance(){
   	 return view('advanceMail');
   }
}

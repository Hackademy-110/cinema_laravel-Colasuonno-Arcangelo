<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    //

    public function homepage () {
        return view('welcome');
    }

    public function contact_us () {
        return view('contact_us');
    }

    public function contact_us_submit(Request $request) {
       
        $email=$request->input('email');
        $name=$request->input('name');
        $message=$request->input('message');

        $contactEmail= new ContactEmail();
        Mail::to($email)->send($contactEmail);

        return redirect(route('homepage'))->with(['name',$name])->with(['email',$email])->with(['message',$message]);
  
    }

    public function thankyou_page () {
        return view('thankyou_page');
    }

      


  
}

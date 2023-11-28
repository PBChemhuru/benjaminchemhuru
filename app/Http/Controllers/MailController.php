<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact()
    {
        return view('contact.contactform');
    }

    public function sendmail(Request $request)
    {
       $request->validate(
        [

            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'body'=>'required',

        ]);
        $formfields=[
            'recipient'=>'kingchemz@gmail.com',
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'body'=>$request->body

        ];
        
        Mail::send('contact.email',$formfields, function($message)use($formfields)
        {
            $message->to($formfields['recipient'])
                    ->from($formfields['email'], $formfields['name'])
                    ->subject($formfields['subject']);
        });
        return redirect()->back()->with('Success','Email Sent,Thank you for getting in Touch');
    }


}

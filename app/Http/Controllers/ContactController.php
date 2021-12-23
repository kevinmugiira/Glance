<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('website.contact');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('kevinmugiira@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent Successfully!');
    }
}

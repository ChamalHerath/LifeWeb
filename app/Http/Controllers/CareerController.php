<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller
{
    function index()
    {
        return view('contact');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'tel'   =>  'required|max:10',
            'subject' => 'required|max:100',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'subject' => $request->subject,
            'message'   =>   $request->message
        );

        Mail::to('chamal.j@coopinsu.com')->send(new SendMail($data));
        return back()->with('success', 'THANKS FOR CONTACTING US! WE WILL CONTACT YOU SOON...');
    }
}

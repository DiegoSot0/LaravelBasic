<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

//use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(/*Request $request*/){
        $msg = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:3'
            
        ]);
        Mail::to('bodiba2876@veb27.com')->queue(new MessageReceived($msg));
        return back()->with('status','Recibimos tu mensaje te responderemos en menos de 24 horas');
    }
}

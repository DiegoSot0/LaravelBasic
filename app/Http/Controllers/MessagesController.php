<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

//use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(/*Request $request*/){
        request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:3'
            
        ]);
        Mail::to('tasoc45377@servergem.com')->send(new MessageReceived);
        return 'mensaje enviado';
    }
}

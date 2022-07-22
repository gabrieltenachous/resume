<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function save(Request $request){ 
        Mail::to('gabrielbromo@hotmail.com')->send(new SendEmail($request)); 
        return response()->json('Email enviado com sucesso');
    }
}

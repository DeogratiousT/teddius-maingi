<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSendMail;
use App\Mail\ContactReceivedMail;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contactMe(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
     
        if ($validated->passes()) {
            Mail::to(env('MAIL_OWN'))->send(new ContactSendMail($request->all()));
            Mail::to($request->email)->send(new ContactReceivedMail($request->all()));
            
            return response()->json(['success'=>'Message Sent Successfully']);
        }

        $errors = $validated->errors();

        $data = [];

        if ($errors->has('name')) {
            array_push($data, ['name', $errors->first('name')]);
        }

        if ($errors->has('email')) {
            array_push($data, ['email', $errors->first('email')]);
        }

        if ($errors->has('subject')) {
            array_push($data, ['subject', $errors->first('subject')]);
        }

        if ($errors->has('message')) {
            array_push($data, ['message', $errors->first('message')]);
        }
     
        return response()->json(['errors'=>$data]);
    }
}

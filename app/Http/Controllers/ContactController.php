<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactMe(Request $request)
    {
        Log::info('hrer');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
     
        if ($validator->passes()) {
            return response()->json(['success'=>'Message Sent Successfully']);
        }
     
        return response()->json(['error'=>$validator->errors()->all()]);
    }
}

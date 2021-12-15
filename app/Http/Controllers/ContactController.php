<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contactMe(Request $request)
    {
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

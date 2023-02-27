<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactSendMail;
use App\Mail\ContactReceivedMail;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    public function index()
    {
        if (request()->ajax()) {
            return Laratables::recordsOf(Contact::class);
        }

        $contacts = Contact::all()->count();

        return view('contacts.index', ['contacts'=>$contacts]);
    }
    
    public function contactMe(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ],
        [
            'content.required' => 'The message field is required.'
        ]);
     
        if ($validated->passes()) {
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'content' => $request->content,
            ]);
            Mail::to(env('MAIL_OWN'))->send(new ContactSendMail($request->all()));
            // Mail::to($request->email)->send(new ContactReceivedMail($request->all()));

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

        if ($errors->has('content')) {
            array_push($data, ['content', $errors->first('content')]);
        }
     
        return response()->json(['errors'=>$data]);
    }
}

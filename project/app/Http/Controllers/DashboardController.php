<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Contact::all()->count();
        $contacts = Contact::all()->count();
        return view('dashboard.index',['contacts'=>$contacts, 'projects'=>$projects]);
    }
}

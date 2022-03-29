<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\NoHtml;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMessage;

class ContactController extends Controller
{
    public function store(Request $request){
        Mail::send( new ContactFormMessage() );
        // validate fields
        $this->validate($request, [
            'name' => ['required', 'string', new NoHtml],
            'email' => ['required', 'email', new NoHtml],
            'subject' => ['required', 'string', new NoHtml],
            'message' => ['required', 'string', new NoHtml]
        ]);
 
 
 
        // redirect to contact form with message
        session()->flash('success', 'Wiadomosc wyslana, odpowiemy jak najszybciej!');
 
        return redirect()->back();
 
    }

    public function index(){
        return view('pages.contact');
    }
}

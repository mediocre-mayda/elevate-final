<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function ContactForm(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}

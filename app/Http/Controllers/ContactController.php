<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // ✅ Validate inputs
        $validated = $request->validate([
            'conName' => 'required|string|max:50',
            'conLName' => 'nullable|string|max:50',
            'conEmail' => 'required|email',
            'conPhone' => 'required|digits_between:8,15',
            'conService' => 'required|string',
            'conMessage' => 'required|string|max:1000',
        ]);

        // ✅ Send mail
        Mail::to('rajrebadiya02@gmail.com')->send(new ContactMail($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}

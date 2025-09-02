<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; // optional if using email

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Optionally, send email or save to database
        // Mail::to('info@giginnovations.com')->send(new ContactMail($request->all()));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}

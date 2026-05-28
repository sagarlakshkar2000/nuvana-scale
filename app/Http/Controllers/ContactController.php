<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index()
  {
    return view('pages.contact');
  }

  public function submit(Request $request)
  {
    // Validate and process contact form
    $validated = $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email',
      'message' => 'required|string',
    ]);

    // Process the message (send email, save to database, etc.)
    // ...

    return redirect()->route('contact')->with('success', 'Message sent successfully!');
  }
}

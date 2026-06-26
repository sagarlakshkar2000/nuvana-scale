<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;
use App\Models\ContactQuery;

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
      'phone' => 'nullable|string|max:20',
      'message' => 'required|string',
    ]);

    try {
      // Save to database
      ContactQuery::create($validated);

      // Process the message (send email, save to database, etc.)
      Mail::to('Info@gargiindustries.com')->send(new ContactUsMail($validated));

      if ($request->ajax() || $request->wantsJson()) {
        return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
      }

      return redirect()->route('contact')->with('success', 'Message sent successfully!');
    } catch (\Exception $e) {
      if ($request->ajax() || $request->wantsJson()) {
        return response()->json(['success' => false, 'message' => 'Failed to send message. Please try again later.']);
      }

      return back()->with('error', 'Failed to send message. Please try again later.');
    }
  }
}

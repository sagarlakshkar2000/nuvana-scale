<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WpPost;

class BlogController extends Controller
{
  public function index()
  {
    $posts = WpPost::with('author')
        ->published()
        ->orderBy('post_date', 'desc')
        ->paginate(9);

    return view('pages.blog.index', compact('posts'));
  }

  public function show($slug)
  {
    $post = WpPost::with('author')
        ->published()
        ->where('post_name', $slug)
        ->firstOrFail();

    return view('pages.blog.detail', compact('post'));
  }

  public function preview($id)
  {
    $post = WpPost::with('author')
        ->where('ID', $id)
        ->firstOrFail();

    return view('pages.blog.detail', compact('post'));
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

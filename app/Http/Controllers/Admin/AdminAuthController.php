<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
  public function showLoginForm()
  {
    return view('admin.auth.login');
  }

  public function login(Request $request)
  {
    $request->validate([
      'login' => 'required|string',
      'password' => 'required|string',
    ]);

    $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL)
      ? 'email'
      : (is_numeric($request->input('login')) ? 'phone' : 'username');

    $request->merge([
      $login_type => $request->input('login')
    ]);

    $credentials = $request->only($login_type, 'password');

    if (Auth::attempt($credentials, $request->boolean('remember'))) {
      // Check if the user is an admin
      if (Auth::user()->role === 'admin') {
        $request->session()->regenerate();
        return redirect()->intended(route('admin.products.index'));
      } else {
        // If not an admin, log them out and redirect back with error
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return back()->withErrors([
          'login' => 'You do not have administrative access.',
        ]);
      }
    }

    return back()->withErrors([
      'login' => 'The provided credentials do not match our records.',
    ])->onlyInput('login');
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('admin.login');
  }
}

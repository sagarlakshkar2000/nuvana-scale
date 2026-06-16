<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsAdminMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  Closure(Request): (Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    if (Auth::check() && Auth::user()->role === 'admin') {
      return $next($request);
    }

    // If not authenticated or not an admin, redirect to admin login
    return redirect()->route('admin.login')->with('error', 'You must be an admin to access this page.');
  }
}

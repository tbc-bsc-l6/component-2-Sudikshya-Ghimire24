<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user is an admin
        if (Auth::check() && Auth::user()->usertype !== 'admin') {
            // If not an admin, redirect to home or another page
            return redirect()->route('home');
        }

        return $next($request);
    }
}

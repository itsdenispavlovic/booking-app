<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Daca user nu este de tip admin sau daca role_id nu este specificat in User table, nu va avea acces in admin panel
        if((!empty(Auth::user()->role) && (Auth::user()->role->id !== 1)) || empty(Auth::user()->role))
        {
            return redirect('/');
        }

        return $next($request);
    }
}

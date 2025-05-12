<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (Auth::check()) {
            foreach ($roles as $role) {
                if (Auth::user()->role->name == $role) {
                    return $next($request);
                }
            }
        } else {
            return redirect('/login');
        }

        abort(401); // Of return redirect('/');
    }
}

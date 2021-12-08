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
        if (Auth::user()->role_as == 'admin')
        {
            return $next($request);
        }
        else
        {
            return redirect('mtaa')->with('status','Access action not allowed');
        }

        //using codegrepper explanation for laravel 8 Admin middleware
//        $isAuthenticatedAdmin = (Auth::check() && Auth::user()->role_as == 'admin');
//
//        if (!$isAuthenticatedAdmin) {
//            return redirect('/mtaa')->with('status', 'Authentication Error');
//        }
//        return $next($request);

    }

}

<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  //\Closure  $next
     * @return string|null
     */
    protected function redirectTo($request /*Closure $next*/)
    {
        if (!$request->expectsJson()) {
            return route('login');
           // return $next($request);
        }


//        //Admin login
//        if (Auth::user()->role_as == 'admin')
//        {
//            return 'layouts.Admin';
//        }
//
//        //seller login
//        if (Auth::user()->role_as == 'seller')
//        {
//            return 'layouts.Seller';
//        }
//
//        //normal user login
//        if (Auth::user()->role_as == NULL)
//        {
//            return 'mtaa';
//        }

    }
}

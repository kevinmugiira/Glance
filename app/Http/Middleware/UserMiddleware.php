<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class UserMiddleware
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
        if (Auth::check() && Auth::user()->isban)
        {
            $banned = Auth::user()->isban == '1';
            Auth::logout();
           # Auth::user()->route('logout'); //should be corrected (needs a logout guard)

            if ($banned == 1 ) {
                $message = 'Your account has been deactivated. Please contact administrator';
            }
            return redirect()->route('login')
                ->with('status', $message)
                ->withErrors(['email ' => 'Your account has been deactivated. Please contact administrator']);
        }

        if (Auth::check())
        {
            $expiresAt = Carbon::now()->addMinutes(5);
            Cache::put('user-is-online' . Auth::user()->id, true, $expiresAt);
        }

         return $next($request);
    }
}

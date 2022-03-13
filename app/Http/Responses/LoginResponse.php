<?php


namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use \Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;


class LoginResponse implements LoginResponseContract
{

    /**
     * @inheritDoc
     */
    public function toResponse($request)
    {
        // TODO: Implement toResponse() method.
        if (Auth::user()->role_as == 'admin')
        {
            return view('layouts.Admin');  //can also return to 'home'
        }
        else if (Auth::user()->role_as == 'seller')
        {
            return view('layouts.Seller');
        }
        else
        {
            return view('mtaa');
        }

    }
}

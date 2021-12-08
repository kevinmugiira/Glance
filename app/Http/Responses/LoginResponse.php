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
            return'/home';  //can also return to 'home'
        }
        else
        {
            return '/mtaa';
        }

    }
}

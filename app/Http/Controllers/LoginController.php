<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function redirectTo()
    {
        if (Auth::user()->role_as == 'admin')
        {
            return'dashboard';  //can also return to 'home'
        }
        else
        {
            return 'mtaa';
        }
    }



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

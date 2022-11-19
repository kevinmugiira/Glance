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
            return'layouts.Admin';  //can also return to 'home'
        }
        elseif (Auth::user()->role_as == 'isSeller')
        {
            return redirect('layouts.Seller')->with('status','Welcome Vendor');
        }
        else
        {
            return 'mtaa';
        }
    }

    public function authenticated()
    {
        if (Auth::user()->role_as == 'admin')
        {
            return redirect('layouts.Admin')->with('status','Welcome Admin, we missed you over here');
        }
        elseif (Auth::user()->role_as == 'isSeller')
        {
            return redirect('layouts.Seller')->with('status','Welcome Vendor');
        }
        elseif (Auth::user()->role_as == 'isUser')
        {
            return redirect()->back()->with('status', 'Welcome dear customer');
        }

    }



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

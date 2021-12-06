<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home');
    }

    public  function show()
    {
        return view('website.products');
    }
}

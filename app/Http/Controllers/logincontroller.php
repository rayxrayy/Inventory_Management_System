<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function login(Request $request)
    {
        return view('dashboard');
    }

    public function userlogin(Request $request)
    {
        return view('dashboard');
    }



}

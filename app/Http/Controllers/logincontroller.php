<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function login(Request $request)
    { 
        return view('dashboard');

        // $credentials = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        // if (Auth::attempt($credentials)) {
        //     // Authentication was successful...
        //     return redirect()->intended('/dashboard');
        // }

        // // return redirect('/login')->with('error', 'Invalid login credentials');
        // return "abx";
    }
}

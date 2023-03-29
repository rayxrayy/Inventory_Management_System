<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Crypt;
use Session;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Auth;

class imscontroller extends Controller
{
    public function index(Request $req){
    // echo "hello";
    return view('dashboard');

    // $req->validate([

    //     'email' => 'required',
    //     'password' => 'required'
    // ]);


    // // login code
    // if (Auth::attempt($req->only('email', 'password'))) {
    //     return redirect('dashboard');
    // }
    // // return redirect('login')->withError('login details are not valid!');
    // return "error";
}
    
// public function login(Request $requ){
//     $requ->validate([

//         'email' => 'required',
//         'password' => 'required'
//     ]);


//     // login code
//     if (Auth::attempt($requ->only('email', 'password'))) {
//         return redirect('dashboard');
//     }
//     return redirect('login')->withError('login details are not valid!');
// }
// return redirect('forgotpassword');

public function home(){
    
    return view('dashboard');
}
// public function category(){
//     return view('category');
// }
}

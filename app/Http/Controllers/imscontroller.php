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
    return view('dashboard');
}

public function bill(){
    return view('Bill');
}
public function home(){
    return view('dashboard');
}
public function category(){
    return view('category');
}
public function order(){
    return view('order');
}

public function product(){
    return view('product');
}

public function member(){
    return view('member');
}
public function company(){
    return view('company');
}
public function setting(){
    return view('setting');
}



}

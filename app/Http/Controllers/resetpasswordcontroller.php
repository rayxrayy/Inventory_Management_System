<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class resetpasswordcontroller extends Controller
{
    function resetpassword(Request $req){
        $password=$req->password;
        $email=$req->email;
        $user=User::where("email",$email)->first();
        $user->password=Hash::make($password);
        $user->save();
        print_r("changed password");
    }
}

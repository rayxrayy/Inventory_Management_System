<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function update(Request $request)
    {

            // dd($request);

        $user = User::where('id',auth()->user()->id)->first();


        $user->name = $request->input('fullname') ?? '';;
        // $user->status = $request->input('status') ?? $user->status;
        $user->save();

        return redirect('/setting')->with(['message' => 'setting updated successfully']);

    }

}

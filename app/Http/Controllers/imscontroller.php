<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Crypt;
use Session;
use Illuminate\Contracts\Encryption\DecryptException;
class imscontroller extends Controller
{
    public function index(Request $req){
        $validatedData = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        // dd($req->all());
    // return "all is well";
    // $user=new User;
    // $user->name=$req->name;
    // $user->email=$req->email;
    // $user->save;
    // return view('dashboard');
    // return redirect('forgotpassword');
    }

    public function login(Request $request)
{
    // $validatedData = $request->validate([
    //     'email' => 'required|email',
    //     'password' => 'required|min:8',
    // ]);

    // Check if the user's credentials are valid
    // if (Auth::attempt($validatedData)) {
    //     // Authentication passed, redirect to the dashboard
    //     return redirect('/dashboard');
    // } else {
    //     // Authentication failed, redirect back with error message
    //     return redirect('/login')->with('error', 'Invalid email or password');
    // }
}

// }
//     public function login(Request $request){
//     // return "all is well";
//     // return User::where('email', $request->input('email'))->get();
//     // dd($request->all());
//     // validation data
//    $request->validate([

//         'email' => 'required',
//         'password' => 'required'
//     ]);


//     // login code
//     if (\Auth::attempt($request->only('email', 'password'))) {
//         return redirect('dashboard');
//     }
//     return redirect('login')->withError('login details are not valid!');
// }

    public function logout(){
    // return "all is well";
    return redirect('/login');
}
    
} 

<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        // $settings = setting::all();
        return view('setting');
    }
//     public function store(Request $request){

//         $setting = new setting();

//         $setting->firstname = $request->input('firstname');
//         $setting->lastname = $request->input('lastname');
//         $setting->email = $request->input('email');
//         $setting->phone = $request->input('phone');
//         $setting->save();

//         return redirect('/setting');

}

<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $members = member::all();
        // dd($members);
        return view('member',compact('members'));
    }
    public function store(Request $request){
        $member = new member();
        // dd($member);
        $member->name = $request->input('name');
        $member->password = $request->input('password');
        $member->email = $request->input('email');
        $member->phone = $request->input('phone');
        $member->address = $request->input('address');
        $member->gender = $request->input('gender');
        $member->save();

        return redirect('/member');
        // dd($request);
    }

    public function destroy($id)
    {
        $users = member::user($id);
        $users->delete();

        // return Redirect::route('comics.users' , compact('users'));
    }
}

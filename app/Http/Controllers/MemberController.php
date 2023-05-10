<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class MemberController extends Controller
{
    public function index(){
        $members = member::all();

        // dd($members);
        // $membersCount = Member::count();
// dd($membersCount);
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


   // Delete a member
   public function destroy($id)
   {
       $member = member::find($id);
       $member->delete();
       return redirect('/member')->with(['message'   => 'member deleted successfully']);
   }

   // Edit a member
   public function update(Request $request)
   {
       if(!$request->has('id')){
           return redirect('/member')->with(['message' => 'Oops.. Something went wrong']);
       }

       $member = member::find($request->input('id'));
       $member->name = $request->input('name') ?? $member->name;
       $member->password = $request->input('password') ?? $member->password;
       $member->email = $request->input('email') ?? $member->email;
       $member->phone = $request->input('phone') ?? $member->phone;
       $member->address = $request->input('address') ?? $member->address;
       $member->gender = $request->input('gender') ?? $member->gender;
       $member->save();

       return redirect('/member')->with(['message' => 'member updated successfully']);
   }
}

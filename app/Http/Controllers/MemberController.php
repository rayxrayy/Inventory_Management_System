<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class MemberController extends Controller
{
    public function index(){
        $member_role_id = DB::table('roles')->where('name','member')->first();

        if(!is_null($member_role_id)){
            $member_role_id = $member_role_id->id;
        }
        else{
            dd("ERROR::Please check roles table. Roles must be admin and member in lower case.");
        }

        $members = User::with('user_member')->where('role',$member_role_id)->get();
//        dd($members);

        // dd($members);
        // $membersCount = Member::count();
// dd($membersCount);
        return view('member',compact('members'));
    }
    public function store(Request $request){
//        dd($request);
        $member_role_id = DB::table('roles')->where('name','member')->first();

        if(!is_null($member_role_id)){
            $member_role_id = $member_role_id->id;
        }
        else{
            return redirect('/member');
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $user->role = $member_role_id;
        $user->save();

        $details = new member();
        $details->phone = $request->input('phone');
        $details->address = $request->input('address');
        $details->gender = $request->input('gender');
        $details->user_id = $user->id;
        $details->save();

        return redirect('/member');

    }

//     public function stores(Request $request)
// {
//     // validate request data
//     $validatedData = $request->validate([
//         'name' => 'required',
//         'password' => 'required',
//         'email' => 'required|email|unique:members',
//         'phone' => 'required',
//         'address' => 'required',
//         'gender' => 'required',
//     ]);

//     // create member
//     $member = Member::create($validatedData);

//     // create notification
//     $notificationMessage = 'New member added: ' . $member->name;
//     Notification::create(['message' => $notificationMessage]);

//     // redirect to members index page
//     return redirect()->route('members.index')->with('success', 'Member added successfully.');
// }


   // Delete a member
   public function destroy($id)
   {
       $user = user::find($id);
       $user->delete();
       member::where('user_id',$user)->delete();

       return redirect('/member')->with(['message'   => 'member deleted successfully']);
   }

   // Edit a member
   public function update(Request $request)
   {
       if(!$request->has('id')){
           return redirect('/member')->with(['message' => 'Oops.. Something went wrong']);
       }

       $user = User::find($request->input('id'));
       $user->name = $request->input('name');
       $user->password = (trim($request->input('password')) !== '') ? Hash::make($request->input('password')) : $user->password;
       $user->email = $request->input('email');
       $user->save();

       $details = member::where('user_id',$user->id)->first();
       $details->phone = $request->input('phone');
       $details->address = $request->input('address');
       $details->gender = $request->input('gender');
       $details->user_id = $user->id;
       $details->save();

       return redirect('/member')->with(['message' => 'member updated successfully']);
   }
}

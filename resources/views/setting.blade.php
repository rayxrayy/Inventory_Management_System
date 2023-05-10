@extends('layouts.home')

@section('content')
<h1>Settings</h1>
<div class="flex">
    <div class="box" id="edit-user-form">
        <h2>Edit Profile</h2>
        <form method="POST" action="/setting" class="form-container-setting">
        @csrf
        @method('PATCH')
        <input id="user-id" type="hidden" name="id" />
            <label for="text"><b>Full Name</b></label>
            <input id='user-name' type="text" name="firstname" value="{{ auth()->user()->name }}" autofocus="" required>

            <label for="text"><b>Address</b></label>
            <input id='address' type="text" placeholder="Enter Last Name" name="lastname" value="Naxal" required>

            <label for="text"><b>Email</b></label>
            <input id='email' type="email" placeholder="Enter Your Email" name="email" value="{{ auth()->user()->email }}"required>

            <label for="text"><b>Phone</b></label>
            <input id='phone' type="text" placeholder="Enter Phone Number" name="phone" value="9828962083" required>
            <div class="category">
                <button style="margin-top: 3px;" type="submit" class="btn spaces">Save Changes</button>
            </div>
        </form>
    </div>
@endsection

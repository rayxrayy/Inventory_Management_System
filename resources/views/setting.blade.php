@extends('layouts.home')

@section('content')
<h1>Settings</h1>
<div class="flex">
    <div class="box">
        <h2>Edit Profile</h2>
        <form action="" class="form-container-setting">
            <label for="text"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="fname" required>

            <label for="text"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="lname" required>

            <label for="text"><b>Email</b></label>
            <input type="email" placeholder="Enter Your Email" name="email" required>

            <label for="text"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone Number" name="phone" required>

        </form>
    </div>

    <div class="box">
        <h2>Change Password</h2>
        <form action="" class="form-container-setting">
            <label for="status"><b>Change Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <label for="text"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="cpassword" required>
            <div class="category">
                <button type="submit" class="btn  spaces">Save Changes</button>
            </div>
        </form>
    </div>

</div>
@endsection

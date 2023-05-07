@extends('layouts.home')

@section('content')
<h1>Settings</h1>
<div class="flex">
    <div class="box">
        <h2>Edit Profile</h2>
        <form method="POST" action="" class="form-container-setting" onsubmit="clearForm()">
        @csrf
            <label for="text"><b>Full Name</b></label>
            <input id='name' type="text" name="firstname" value="{{ auth()->user()->name }}" autofocus="" required>

            <label for="text"><b>Address</b></label>
            <input id='address' type="text" placeholder="Enter Last Name" name="lastname" value="Naxal" required>

            <label for="text"><b>Email</b></label>
            <input id='email' type="email" placeholder="Enter Your Email" name="email" value="{{ auth()->user()->email }}"required>

            <label for="text"><b>Phone</b></label>
            <input id='phone' type="text" placeholder="Enter Phone Number" name="phone" value="9828962083" required>
            <div class="category">
                <button type="submit" class="btn spaces">Save Changes</button>
            </div>

        </form>
    </div>
{{--
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
    </div> --}}

</div>

<script>
  function clearForm() {
    document.querySelector('.form-container-setting').reset();
  }

</script>
@endsection

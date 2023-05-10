@extends('layouts.home')

@section('content')
<style>

</style>
<h1>Manage Member</h1>
<div class="category">
    <button type="button" id="add_category" onclick="openForm()">Add Member</button>
    <div class="form-popup-product" id="myForm">
        <form method="post" action="" class="form-container-product">
            @csrf
            <h1>Add Member</h1>

            <label for="text"><b>Member Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="text"><b>Password</b></label>
            <input type="text" placeholder="Enter Password" name="password" required>

            <label for="text"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="text"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone number" name="phone" required>
            <label for="text"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address" required>


            <label for="gender"><b>Gender<b></label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <div>
                <button type="submit" class="btn">Save</button>
                <button class="close" id="close-btn" onclick="closeForm()">
                    <span class="material-icons-sharp">close</span>
                </button>
            </div>
        </form>

    </div>

        <div class="form-popup-product" id="edit-member-form">
        <form method="post" action="" class="form-container-product">
            @csrf
             @method('PATCH')
            <h1>Edit Member</h1>

<input id="member-id" type="hidden" name="id" />
            <label for="text"><b>Member Name</b></label>
            <input id="member-name" type="text" placeholder="Enter Name" name="name" required>

            <label for="text"><b>Password</b></label>
            <input id="member-password" type="text" placeholder="Enter Password" name="password" required>

            <label for="text"><b>Email</b></label>
            <input id="member-email" type="text" placeholder="Enter Email" name="email" required>

            <label for="text"><b>Phone</b></label>
            <input id="member-phone" type="text" placeholder="Enter Phone number" name="phone" required>
            <label for="text"><b>Address</b></label>
            <input id="member-address" type="text" placeholder="Enter Address" name="address" required>


            <label for="gender"><b>Gender<b></label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <div>
                <button type="submit" class="btn">Save Changes</button>
                <button class="close" id="close-btn" onclick="closeFom()">
                    <span class="material-icons-sharp">close</span>
                </button>
            </div>
        </form>

    </div>
</div>

<div class="recent-orders">
    <h2>Members</h2>
    {{-- @if(isset($members) && count($members) > 0)
    <p>Total number of members: {{ count($members) }}</p> --}}
    <table id="category_data">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($members))
            @foreach ($members as $member )
            <tr>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->user_member->phone ??'' }}</td>
                <td>{{ $member->user_member->address ?? '' }}</td>
                <td class="action" style="display: flex; align-items: center; padding-left:35%;">
                    <button onclick="editMember({{ $member }})"><span class="material-icons-sharp">edit</span></button>
                    <a href="/member/delete/{{$member->id}}" onclick="return confirm('Are your sure?')"style="margin-left: 8px;"><button><span class="material-icons-sharp">delete</span></button>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection

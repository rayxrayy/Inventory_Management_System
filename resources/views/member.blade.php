@extends('layouts.home')

@section('content')
<h1>Manage Member</h1>

<div class="category">
    <button type="button" id="add_category" onclick="openForm()">Add Member</button>
    <div class="recent-orders">
        <h2>Members</h2>
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
            <tr>
                <td>byan</td>
                <td>bryan@gmail.com</td>
                <td>+977 00000000</td>
                <td>Naxal</td>
                <td class="action">
                    <button><span class="material-icons-sharp">edit</span></button>
                    <button><span class="material-icons-sharp">delete</span></button>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Add Category Form -->
    <div class="form-popup-product" id="myForm">
        <form method="POST" action="" class="form-container-product">
            <h1>Add Member</h1>
@csrf
            <label for="text"><b>Member Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="text"><b>Password</b></label>
            <input type="text" placeholder="Enter Password" name="Password" required>

            <label for="text"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="text"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone number" name="number" required>
<label for="text"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address" required>


            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <div>
                <button type="submit" class="btn">Save Changes</button>
                <button class="close" id="close-btn" onclick="closeForm()">
                    <span class="material-icons-sharp">close</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

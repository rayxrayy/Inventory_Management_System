@extends('layouts.home')

@section('content')
<h1>Manage Member</h1>

<div class="category">
    <button type="button" id="add_category" onclick="openForm()">Add Member</button>

    <!-- Add Category Form -->
    <div class="form-popup-product" id="myForm">
        <form action="" class="form-container-product">
            <h1>Add Member</h1>

            <label for="text"><b>Member Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="text"><b>Username</b></label>
            <input type="text" placeholder="Enter username" name="name" required>

            <label for="text"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="text"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone number" name="number" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>

                <button type="submit" class="btn">Save Changes</button>
                <button class="close" id="close-btn" onclick="closeForm()">
                    <span class="material-icons-sharp">close</span>
                </button>

        </form>
    </div>
    <button type="button" id="export_button" class="excel">Excel</button>
</div>

<div class="recent-orders">
    <h2>Members</h2>
    <table id="category_data">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Name</th>
                <th>Phone</th>
                <!-- <th>Availability</th> -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <td>byan</td>
            <td>bryan@gmail.com</td>
            <td>Bryan Taylor</td>
            <td>+977 00000000</td>
            <td>Active</td>
            <td class="action">
                <button><span class="material-icons-sharp">edit</span></button>
                <button><span class="material-icons-sharp">delete</span></button>
            </td>

            <td>byan</td>
            <td>bryan@gmail.com</td>
            <td>Bryan Taylor</td>
            <td>+977 00000000</td>
            <td>Active</td>
            <td class="action">
                <button><span class="material-icons-sharp">edit</span></button>
                <button><span class="material-icons-sharp">delete</span></button>
            </td>

            <td>byan</td>
            <td>bryan@gmail.com</td>
            <td>Bryan Taylor</td>
            <td>+977 00000000</td>
            <td>Active</td>
            <td class="action">
                <button><span class="material-icons-sharp">edit</span></button>
                <button><span class="material-icons-sharp">delete</span></button>
            </td>

            <td>byan</td>
            <td>bryan@gmail.com</td>
            <td>Bryan Taylor</td>
            <td>+977 00000000</td>
            <td>Active</td>
            <td class="action">
                <button><span class="material-icons-sharp">edit</span></button>
                <button><span class="material-icons-sharp">delete</span></button>
            </td>

            <td>byan</td>
            <td>bryan@gmail.com</td>
            <td>Bryan Taylor</td>
            <td>+977 00000000</td>
            <td>Active</td>
            <td class="action">
                <button><span class="material-icons-sharp">edit</span></button>
                <button><span class="material-icons-sharp">delete</span></button>
            </td>
        </tbody>
    </table>
</div>
@endsection

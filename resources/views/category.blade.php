@extends('layouts.home')
@section('content')
<h1>Manage Category</h1>
<div class="category">
    <button type="button" id="add_category" onclick="openForm()">Add Category</button>
    <!-- Add Category Form -->
    <div class="form-popup" id="myForm">
        <form method="post" action="" class="form-container">
            @csrf
            <h1>Add Category</h1>

            <label for="text"><b>Category Name</b></label>
            <input type="text" placeholder="Enter Category Name" name="name" required>

            <label for="status"><b>Status</b></label>

            <select name="status" required style="width:100%;padding:15px;margin-bottom:20px;border:1px solid #7d8da1;">
                <option>--Select Status--</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
            <button type="submit" class="btn">Save</button>
            <button class="close" id="close-btn" onclick="closeForm()">
                <span class="material-icons-sharp">close</span>
            </button>

            <!-- <button type="button" class="btn cancel" onclick="closeForm()"><span class="material-icons-sharp">edit</span></button> -->
        </form>
    </div>

    <!--Edit form-->
    <div class="form-popup category-form" id="edit-category-form">
        <form method="post" action="/category" class="form-container">
            @csrf
            @method('PATCH')
            <h1>Edit Category</h1>
            <input id="category-id" type="hidden" name="id"/>
            <label for="text"><b>Category Name</b></label>
            <input id="category-name" type="text" placeholder="Enter Category Name" name="name" required>

            <label for="status"><b>Status</b></label>

            <select id="category-status" name="status" required style="width:100%;padding:15px;margin-bottom:20px;border:1px solid #7d8da1;">
            <option>--Select Status--</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
            <button type="submit" class="btn">Save Changes</button>
            <button type="button" class="close-btn" onclick="closeEditFormm()">
                <span class="material-icons-sharp">close</span>
            </button>

            <!-- <button type="button" class="btn cancel" onclick="closeForm()"><span class="material-icons-sharp">edit</span></button> -->
        </form>
    </div>


    <button type="button" id="export_button">Excel</button>
</div>

<div class="recent-orders">
    <h2>Categories</h2>
 @if(isset($categories) && count($categories) > 0)
    <p>Total number of categories: {{ count($categories) }}</p>
        <table id="category_data">
        <thead>
            <tr>

                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @if(isset($categories)) --}}
            @foreach ($categories as $category )
            <tr>

                <td>{{ $category->name }}</td>
                <td>{{ $category->status ? "Active" : "Inactive" }}</td>
                <td class="action">
                    <button onclick="editCategory({{ $category }})"><span class="material-icons-sharp">edit</span></button>
                    <a href="/category/delete/{{$category->id}}" onclick="return confirm('Are your sure?')"><button><span  class="material-icons-sharp">delete</span></button></a>
                </td>



            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection

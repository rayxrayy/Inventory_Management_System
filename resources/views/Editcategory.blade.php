@extends('layouts.home')
@section('content')
<h1>Manage Category</h1>
<div class="category">
    <button type="button" id="add_category" onclick="openForm()">Add Category</button>
    <!-- Add Category Form -->
    <div class="form-popup" id="myForm">
        <form method="post" action="{{ route('categories.update', $category->name) }}" class="form-container">
            @csrf
             @method('PUT')
            <h1>Add Category</h1>

            <label for="text"><b>Category Name</b></label>
            <input type="text" placeholder="Enter Category Name" name="name" value="{{ $category->name }}" required>

            <label for="status"><b>Status</b></label>
            <input type="text" placeholder="Enter Status" name="status" value="{{ $category->status }}" required>

            <button type="submit" class="btn">Save Changes</button>
            <button class="close" id="close-btn" onclick="closeForm()">
                <span class="material-icons-sharp">close</span>
            </button>

            <!-- <button type="button" class="btn cancel" onclick="closeForm()"><span class="material-icons-sharp">edit</span></button> -->
        </form>
    </div>
    <button type="button" id="export_button">Excel</button>
</div>

<div class="recent-orders">
    <h2>Categories</h2>
    <table id="category_data">
        <thead>
            <tr>

                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )
            <tr>

                <td>{{ $category->name }}</td>
                <td>{{ $category->status }}</td>
                <td class="action">
                    <button><span href="{{ route('categories.edit', $category->name) }}" class="material-icons-sharp" id = "edit">edit</span></button>
                    <form method="POST" action="{{ route('categories.destroy', $category->name) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this category?')"><span class="material-icons-sharp">delete</span></button>
                    </form>

                </td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
const btn = document.getElementById("edit");
sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});
</script>

@endsection

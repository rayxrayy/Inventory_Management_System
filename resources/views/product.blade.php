@extends('layouts.home')

@section('content')
<h1>Manage Product</h1>

<div class="category">
    <button type="button" id="add_category" onclick="openForm()">Add Product</button>

    <!-- Add product Form -->
    <div class="form-popup-product" id="myForm">
        <form method="post" action="" class="form-container-product">
            @csrf
            <h1>Add Product</h1>
            <label for="text"><b>Image</b></label>
            <button class="space"><span class="material-icons-sharp">folder</span></button>
            <!-- <input type="text" placeholder="Enter Category Name" name="name" required> -->

            <label for="text"><b>Product Name</b></label>
            <input type="text" placeholder="Enter Product Name" name="name" required>

            <label for="status"><b>Price</b></label>
            <input type="number" placeholder="Enter Price" name="price" required>

            <label for="text"><b>Quantity</b></label>
            <input type="text" placeholder="Enter Quantity" name="quantity" required>

            <label for="text"><b>Category Name</b></label>

            <select name="category" required>
                @if(isset($categories))
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                @endif;
            </select>

            <label for="text"><b>Status</b></label>
            <select name="status" required>
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
    <div class="form-popup-product" id="edit-product-form">
        <form method="post" action="" class="form-container-product">
            @csrf
            @method('PATCH')
            <h1>Edit Product</h1>
            <label for="text"><b>Image</b></label>
            <button id="uploadBtn" class="space"><span class="material-icons-sharp">folder</span></button>
            <div id="imageContainer" style="display:none; width: 375px; height: 211px;"></div>

            <input id="product-id" type="hidden" name="id" />
            <label for="text"><b>Product Name</b></label>
            <input id="product-name" type="text" placeholder="Enter Product Name" name="name" required>

            <label for="status"><b>Price</b></label>
            <input id="product-price" type="number" placeholder="Enter Price" name="price" required>

            <label for="text"><b>Quantity</b></label>
            <input id="product-qty" type="text" placeholder="Enter Quantity" name="quantity" required>

            <label for="text"><b>Category Name</b></label>

            <select  name="category" required>
                @if(isset($categories))
                @foreach($categories as $category)
                <option id="product-category" value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                @endif;
            </select>

            <label for="text"><b>Status</b></label>
            <select id="product-status" name="status" required>
                <option>--Select Status--</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>

            <button type="submit" class="btn">Save Changes</button>
            <button class="close" id="close-btn" onclick="closeproductEditForm()">
                <span class="material-icons-sharp">close</span>
            </button>

            <!-- <button type="button" class="btn cancel" onclick="closeForm()"><span class="material-icons-sharp">edit</span></button> -->
        </form>
    </div>

    <button type="button" id="export_button" class="excel">Excel</button>





</div>

<div class="recent-orders">
    <h2>Products</h2>
     {{-- @if(isset($products) && count($products) > 0)
    <p>Total number of products: {{ count($products) }}</p> --}}
    <table id="category_data">
        <thead>
            <tr>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Category</th>
                <th>Availability</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($products) )
            @foreach ($products as $product )
            <tr class="height1">
                <td class="table_image"><img class="profile-photo1" src="./images/box.jpg" alt=""></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->category->name ?? "" }}</td>
                <td>{{ $product->availability ? "Active" : "Inactive" }}</td>
                <td class="action" style="display: flex; align-items: center; padding-left:35%;">
    <button onclick="editProduct({{ $product }})" ><span class="material-icons-sharp" >edit</span></button>
    <a class="deletebutton" href="/product/delete/{{$product->id}}" onclick="return confirm('Are your sure?')"style="margin-left: 8px;"><button><span class="material-icons-sharp">delete</span></button></a>
</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection

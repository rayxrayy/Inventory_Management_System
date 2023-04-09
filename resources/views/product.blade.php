@extends('layouts.home')

@section('content')
    <h1>Manage Product</h1>

    <div class="category">
      <button type="button" id="add_category" onclick="openForm()">Add Product</button>

      <!-- Add Category Form -->
      <div class="form-popup-product" id="myForm">
        <form method="post" action="" class="form-container-product">
          @csrf
          <h1>Add Product</h1>


          <div class="theme-toggler theme-product">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
          </div>




          <label for="text"><b>Image</b></label>
          <button class="space"><span class="material-icons-sharp">folder</span></button>
          <!-- <input type="text" placeholder="Enter Category Name" name="name" required> -->

          <label for="text"><b>Product Name</b></label>
          <input  type="text" placeholder="Enter Product Name" name="name" required>

          <label for="status"><b>Price</b></label>
          <input  type="text"  placeholder="Enter Price" name="status" required>
          <!-- <input type="password" placeholder="Enter Password" name="status" required> -->

          <label for="text"><b>Quantity</b></label>
          <input  type="text" placeholder="Enter Quantity" name="quantity" required>

          <label for="text"><b>Category Name</b></label>
          <input  type="text" placeholder="Enter Category Name" name="catname" required>

          <label for="text"><b>Availability</b></label>
          <input  type="text" placeholder="Enter Availability" name="availability" required>

          <button  type="submit" class="btn">Save Changes</button>
          <button class="close" id="close-btn" onclick="closeForm()">
            <span class="material-icons-sharp">close</span>
          </button>

          <!-- <button type="button" class="btn cancel" onclick="closeForm()"><span class="material-icons-sharp">edit</span></button> -->
        </form>
      </div>
      <button type="button" id="export_button" class="excel">Excel</button>





    </div>

    <div class="recent-orders">
      <h2>Products</h2>
      <table id="category_data">
        <thead>
          <tr>
            <th>Image</th>
            <th>Product</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Availability</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

         @foreach ($products as $product )
          <tr class="height1">
            {{-- <td class="table_image">
                <img class="profile-photo1" src="./images/profile-1.jpg" alt="">
            </td> --}}
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->categoryname }}</td>
            <td>{{ $product->availability }}</td>
            <td class="action">
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
   @endsection

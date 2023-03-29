<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--Material Icon-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
     rel="stylesheet">
 <link rel="stylesheet" href="./style1.css">
  <!-- Sheet Library -->
 <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
 <title>Document</title>
</head>
<body>
 <div class="container">
   <aside>
     <div class="top">
       <div class="logo">
         <img src="./images/logo.png" alt="logo">
         <h2>Cargo<span class="danger">REX</span></h2>
       </div>
       <div class="close" id="close-btn">
         <span class="material-icons-sharp">close</span>
       </div>
     </div>

     <div class="sidebar">
       <a href="./dashboard.html" class="">
         <span class="material-icons-sharp">grid_view</span>
         <h3>Dashboard</h3>
       </a>
       <a href="./category.html" class="active">
         <span class="material-icons-sharp">category</span>
         <h3>Category</h3>
       </a>
       <a href="./order.html">
         <span class="material-icons-sharp">receipt_long</span>
         <h3>Orders</h3>
       </a>
       <!-- <a href="#">
         <span class="material-icons-sharp">insights</span>
         <h3>Products</h3>
       </a> -->
       <!-- <a href="#">
         <span class="material-icons-sharp">mail_outline</span>
         <h3>Messages</h3>
         <span class="message-count">26</span>
       </a> -->
       <a href="./product.html">
         <span class="material-icons-sharp">inventory</span>
         <h3>Products</h3>
       </a>
       <a href="./members.html">
         <span class="material-icons-sharp">groups</span>
         <h3>Members</h3>
       </a>
       <a href="#">
         <span class="material-icons-sharp">apartment</span>
         <h3>Company</h3>
       </a>
       <a href="#">
         <span class="material-icons-sharp">settings</span>
         <h3>Settings</h3>
       </a>
       <!-- <a href="#">
         <span class="material-icons-sharp">add</span>
         <h3>Add Product</h3>
       </a> -->
       <a href="#">
         <span class="material-icons-sharp">logout</span>
         <h3>Log out</h3>
       </a>
     </div>
   </aside>
    <!-- aside end -->
    <div class="right">
        <div class="top">
          <button id="menu-btn">
            <span class="material-icons-sharp">menu</span>
        </button>
        <div class="theme-toggler">
          <span class="material-icons-sharp active">light_mode</span>
          <span class="material-icons-sharp">dark_mode</span>
        </div>
        <div class="profile">
          <div class="info">
            <p>Hey, <b>Daniel</b></p>
            <small class="text-muted">Admin</small>
          </div>
          <div class="profile-photo">
            <img src="./images/profile-1.jpg" alt="">
          </div>
        </div>
    </div>

   <!-- Top end -->

   <main>
    <h1>Manage Product</h1>

    <div class="category">
      <button type="button" id="add_category" onclick="openForm()">Add Product</button>
      
      <!-- Add Category Form -->
      <div class="form-popup-product" id="myForm">
        <form action="" class="form-container-product">
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
          <tr class="height1">
            <td class="table_image"> 
                <img class="profile-photo1" src="./images/profile-1.jpg" alt="">
            </td>
            <td>Foldable</td>
            <td>86</td>
            <td>8</td>
            <td>Active</td>
            <td class="action">
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
          <tr class="height1">
           
            <td class="table_image"> 
                <img class="profile-photo1" src="./images/profile-1.jpg" alt="">
            </td>
            <td>Foldable</td>
            <td>86</td>
            <td>8</td>
            <td>Active</td>
            <td class="action">
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
          <tr class="height1">
           
            <td class="table_image"> 
                <img class="profile-photo1" src="./images/profile-1.jpg" alt="">
            </td>
            <td>Foldable</td>
            <td>86</td>
            <td>8</td>
            <td>Active</td>
            <td class="action">
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
          <tr class="height1">
            <td class="table_image"> 
                <img class="profile-photo1" src="./images/profile-1.jpg" alt="">
            </td>
            <td>Foldable</td>
            <td>86</td>
            <td>8</td>
            <td>Active</td>
            <td class="action">
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
          <tr class="height1">
            <td class="table_image"> 
                <img class="profile-photo1" src="./images/profile-1.jpg" alt="">
            </td>
            <td>Foldable</td>
            <td>86</td>
            <td>8</td>
            <td>Active</td>
            <td class="action">
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
        </tbody>
      </table>
      <!-- <a href="#">Show All</a> -->
    </div>
   </main>
   <!-- main end -->



 
  
   </div>
   
  </div>
 </div>
 <script src="./index.js"></script>
</body>
</html>
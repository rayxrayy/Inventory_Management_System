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
   <main>
    <h1>Manage Member</h1>

    <div class="category">
      <button type="button" id="add_category" onclick="openForm()">Add Member</button>
      
      <!-- Add Category Form -->
      <div class="form-popup-product" id="myForm">
        <form action="" class="form-container-product">
          <h1>Add Member</h1>

           
          <!-- <div class="theme-toggler theme-product">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
          </div>
        -->



         <!--  <label for="text"><b>Image</b></label>
          <button class="space"><span class="material-icons-sharp">folder</span></button>
          <input type="text" placeholder="Enter Category Name" name="name" required> -->

          <label for="text"><b>Member Name</b></label>
          <input  type="text" placeholder="Enter Name" name="name" required>

          <label for="text"><b>Username</b></label>
          <input  type="text" placeholder="Enter username" name="name" required>
      
         <!--  <label for="status"><b>Username</b></label>
          <input  type="text"  placeholder="Enter Price" name="status" required>
          <!-- <input type="password" placeholder="Enter Password" name="status" required> -- -->
          <label for="text"><b>Email</b></label>
          <input  type="text" placeholder="Enter Email" name="email" required>
      
          <!-- <label for="text"><b>Q</b></label>
          <input  type="text" placeholder="Enter Quantity" name="quantity" required> -->
          <label for="text"><b>Phone</b></label>
          <input  type="text" placeholder="Enter Phone number" name="number" required>

                    <label for="gender">Gender:</label>
          <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>

          <!-- <label for="text"><b>Category Name</b></label>
          <input  type="text" placeholder="Enter Category Name" name="catname" required> -->

          <!-- <label for="text"><b>Availability</b></label>
          <input  type="text" placeholder="Enter Availability" name="availability" required>
 -->
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
         <!--  <tr class="height1">
            <td class="table_image"> 
                <img class="profile-photo1" src="./images/profile-1.jpg" alt="">
            </td> -->
            <td>byan</td>
            <td>bryan@gmail.com</td>
            <td>Bryan Taylor</td>
            <td>+977 00000000</td>
            <td>Active</td>
            <td class="action">
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
         <!--  <tr class="height1">
           
            <td class="table_image"> 
                <img class="profile-photo1" src="./images/profile-1.jpg" alt=""> -->
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
            
            
          </tr>
         <!--  <tr class="height1">
           
            <td class="table_image"> 
                <img class="profile-photo1" src="./images/profile-1.jpg" alt=""> -->
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
            
            
          </tr>
          <!-- <tr class="height1">
            <td class="table_image"> 
                <img class="profile-photo1" src="./images/profile-1.jpg" alt=""> -->
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
            
            
          </tr>
          <!-- <tr class="height1">
            <td class="table_image"> 
                <img class="profile-photo1" src="./images/profile-1.jpg" alt=""> -->
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
            
            
          </tr>
        </tbody>
      </table>
    </div>
   </main>
   <!-- main end -->



 
  
   </div>
 </div>
<script src="{{asset('jsfile/index.js')}}"></script>
</body>
</html>
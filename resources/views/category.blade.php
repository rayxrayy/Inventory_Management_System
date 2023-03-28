<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--Material Icon-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
     rel="stylesheet">
 <link rel="stylesheet" href="cssfile/style.css">
  <!-- Sheet Library -->
 <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
 <title>Document</title>
</head>
<body>
   <main>
    <h1>Manage Category</h1>

    <div class="category">
      <button type="button" id="add_category" onclick="openForm()">Add Category</button>

      <!-- Add Category Form -->
      <div class="form-popup" id="myForm">
        <form method= "post" action="" class="form-container">
          <h1>Add Category</h1>
      
          <label for="text"><b>Category Name</b></label>
          <input type="text" placeholder="Enter Category Name" name="name" required>
      
          <label for="status"><b>Status</b></label>
          <input type="text"  placeholder="Enter Status" name="status" required>
          <!-- <input type="password" placeholder="Enter Password" name="status" required> -->
      
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
          <tr>
           
            <td>Foldable</td>
            <td>Active</td>
            <td class="action">
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
          <tr>
           
            <td>Foldable</td>
            <td>Active</td>
            <td class="action">
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
          <tr>
           
            <td>Foldable</td>
            <td>Active</td>
            <td class="action">
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
          <tr>
            <td>Foldable</td>
            <td>Active</td>
            <td class="action">
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
          <tr>
            <td>Foldable</td>
            <td>Inactive</td>
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
 <script src="./category.js"></script>
</body>
</html>
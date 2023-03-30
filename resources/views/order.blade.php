<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--Material Icon-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
     rel="stylesheet">
 <link rel="stylesheet" href="./styles.css">
 
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

     <div class="sidebar" >
       <a href="./dashboard.html" class="">
         <span class="material-icons-sharp">grid_view</span>
         <h3>Dashboard</h3>
       </a>
       <a href="./category.html" class="active">
         <span class="material-icons-sharp">category</span>
         <h3>Category</h3>
       </a>
       <a href="./order">
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
    <h1>Manage Order</h1>

    <div class="category">
      <button type="button" id="add_category" onclick="openForm()">Add Order</button>
      
      <!-- Add Category Form -->
      <div class="form-popup-product" id="myForm">
        <form action="" class="form-container-product">
          <h1>Add Order</h1>

           
          <div class="theme-product">
            <span><b>Date: </b> 2023-11-06</span>
             <span><b>Time: </b> 05:47 pm</span>
            
          </div>
       



          <label class="col-sm-5 control-label" for="text"><b>Client Name</b></label>
          <input type="text" placeholder="Enter Client Name" name="name" required>

          <label for="text"><b>Client Address</b></label>
          <input type="text" placeholder="Enter Client Address" name="address" required>
      
          <label for="status"><b style="width:50%">Phone</b></label>
          <input type="text"  placeholder="Enter Client Phone" name="phone" required>
          <!-- <input type="password" placeholder="Enter Password" name="status" required> -->
      

          <div class="recent-orders belowtable">
          <table id="category_data">
            <thead>
              <tr>
                
                <th style="width:50%"><label for="product"><b>Product</b></label></th>
                <th style="width:10%">Qty</th>
                <th style="width:10%">Rate</th>
                <th style="width:20%">Amount</th>
                <th style="width:10%"><button class="order-btn"><span class="material-icons-sharp">add</span></button></th>
              </tr>
            </thead>
            <tbody>
              
              <tr class="height1">
               
                <td>
                  <select id="product" name="product">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="fiat">Fiat</option>
                  <option value="audi">Audi</option>
                </select>
              </td>
      
                <!-- <td><input type="text"  placeholder="Enter Client Phone" name="product" required></td> -->
                <td><input type="number" min="1" placeholder="Enter Qty" name="qty" required></td>
                <td><input type="text"  placeholder="" name="rate" disabled></td>
                <td><input type="text"  placeholder="" name="amount" disabled></td>
                 
                <td >
                  <button class="order-btn"><span class="material-icons-sharp">delete</span></button>
                </td>
                
                
              </tr>

              <tr class="height1">
               
                
                <td>
                  <select id="product" name="product">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="fiat">Fiat</option>
                  <option value="audi">Audi</option>
                </select>
              </td>
                <td><input type="number" min="1" placeholder="Enter Qty" name="qty" required></td>
                <td><input type="text"  placeholder="" name="rate" disabled></td>
                <td><input type="text"  placeholder="" name="amount" disabled></td>
                 
                <td >
                  <button class="order-btn"><span class="material-icons-sharp">delete</span></button>
                </td>
                
                
              </tr>
              
            </tbody>
          </table>
        </div>



          <label for="text"><b>Gross Amount</b></label>
          <input type="text" placeholder="Gross Amount" name="gamount" disabled>

          <label for="text"><b>S Charge 13%</b></label>
          <input type="text" placeholder="Category Name" name="charge" disabled>

          <label for="text"><b>Vat 10%</b></label>
          <input type="text" placeholder="Vat" name="vat" disabled>

          <label for="text"><b>Discount</b></label>
          <input type="text" placeholder="Enter Discount" name="discount" required>

          <label for="text"><b>Net Amount</b></label>
          <input type="text" placeholder="Net Amount" name="namount" disabled>


          <button type="submit" class="btn"><span class="material-icons-sharp">print</span></button>
          <button type="submit" class="btn close">Save Changes</button>
          <button class="close" id="close-btn" onclick="closeForm()">
            <span class="material-icons-sharp">close</span>
          </button>

          <!-- <button type="button" class="btn cancel" onclick="closeForm()"><span class="material-icons-sharp">edit</span></button> -->
        </form>
      </div>
      <button type="button" id="export_button" class="excel">Excel</button>




      
    </div>

    <div class="recent-orders">
      <h2>Orders</h2>
      <table id="category_data">
        <thead>
          <tr>
            <th>Bill No</th>
            <th>Client</th>
            <th>Contact</th>
            <th>Date Time</th>
            <th>ProduCt Qty</th>
            <th>Amount</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="height1">
            <td>123</td>
            <td>Foldable</td>
            <td>9864567789</td>
            <td>06-11-2023 05:29 pm</td>
            <td>3</td>
            <td>500.00</td>
            <td class="action">
              <button><span class="material-icons-sharp">print</span></button>
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
          <tr class="height1">
           
            <td>123</td>
            <td>Foldable</td>
            <td>9864567789</td>
            <td>06-11-2023 05:29 pm</td>
            <td>3</td>
            <td>500.00</td>
            <td class="action">
              <button><span class="material-icons-sharp">print</span></button>
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
          <tr class="height1">
           
            <td>123</td>
            <td>Foldable</td>
            <td>9864567789</td>
            <td>06-11-2023 05:29 pm</td>
            <td>3</td>
            <td>500.00</td>
            <td class="action">
              <button><span class="material-icons-sharp">print</span></button>
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
          <tr class="height1">
            <td>123</td>
            <td>Foldable</td>
            <td>9864567789</td>
            <td>06-11-2023 05:29 pm</td>
            <td>3</td>
            <td>500.00</td>
            <td class="action">
              <button><span class="material-icons-sharp">print</span></button>
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>
            
            
          </tr>
          <tr class="height1">
            <td>123</td>
            <td>Foldable</td>
            <td>9864567789</td>
            <td>06-11-2023 05:29 pm</td>
            <td>3</td>
            <td>500.00</td>
            <td class="action">
              <button><span class="material-icons-sharp">print</span></button>
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
<script src="{{asset('jsfile/index.js')}}"></script>
</body>
</html>
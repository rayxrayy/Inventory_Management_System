<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Material Icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cssfile/styles.css') }}">
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
                <a href="./dashboard" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a id="category" href="./category">
                    <span class="material-icons-sharp">category</span>
                    <h3>Category</h3>
                </a>
                <a id="order" href="./order">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Orders</h3>
                </a>
                <a id="product" href="./product">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Products</h3>
                </a>
                <a id="member" href="./member">
                    <span class="material-icons-sharp">groups</span>
                    <h3>Members</h3>
                </a>
                <a id="company" href="./company">
                    <span class="material-icons-sharp">apartment</span>
                    <h3>Company</h3>
                </a>
                <a id="setting" href="./setting">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                <a id="logout" href="{{ route('logout') }}">
                    <span class="material-icons-sharp ">logout</span>
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
    <!-- <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>

                </div>
                <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro obcaecati dolores maxime minus. Doloremque enim quam dignissimos, optio culpa labore mollitia adipisci! Asperiores deserunt, optio odit provident soluta non aperiam?</p>
                <div class="button">
                    <a href="">Read More</a>
                </div>
            </div>
            <div class="social">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="image-section">
            <img src="./images/category.jpg" alt="about us">
        </div>
    </div> -->
    <h1>About Us</h1>
   <!-- <section class="banner">
    <div>
        <h2>Joe</h2>
         <h3>welcome </h3>
        <h2>Brand New Shiz</h2> 
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis iste ipsam dolore libero sunt enim, nisi dicta distinctio voluptate? Nostrum quia culpa maxime eos fugit error soluta minima labore neque.</p>

    </div>
    <img src="./images/people.jpg" alt="">
   </section> -->
   <!-- <section>
    <h2>Brand New Shiz</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis iste ipsam dolore libero sunt enim, nisi dicta distinctio voluptate? Nostrum quia culpa maxime eos fugit error soluta minima labore neque.</p>

   </section> -->
   <section class="about">
    <div class="main">

         
      <img src="./images/people.jpg" class="image-card" alt="workers">
               
        <!-- <img src="./images/people.jpg" alt="workers"> -->
        <div class="about-text">
            <h5>Cargo<span>REX</span></h5>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, unde asperiores! Omnis quod repudiandae eligendi illo natus reiciendis et quo alias voluptate! Dolorum in, eveniet impedit perspiciatis aspernatur harum obcaecati.</p>
        
            <div class="btn_wrap">
              <span>Share</span>
              <div class="container1">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook-messenger"></i>
              </div>
            </div>
          </div>

        
    </div>
   </section>






   </main>
   <!-- main end -->



 
  
   </div>
   
  </div>
 </div>
<script src="{{asset('jsfile/index.js')}}"></script>
</body>
</html>
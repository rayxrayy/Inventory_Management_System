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
                        <p>Hey, <b>{{ auth()->user()->name }}</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- Top end -->

        </div>
    </div>
     <script src="{{ asset('jsfile/index.js') }}"></script>
</body>

</html>

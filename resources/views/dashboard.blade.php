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
                <a href="./dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}" class="{{ Request::is('dashboard') ? 'active' : '' }}">
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
                @if(auth()->user()->role === '1')
                <a id="member" href="./member">
                    <span class="material-icons-sharp">groups</span>
                    <h3>Members</h3>
                </a>
                @endif
                <a id="company" href="./company" data-id="asdsadasdd" data-name="{{ Request::is('company') ? 'asdsad' : '' }}" class="{{ Request::is('company') ? 'active' : '' }}">
                    <span class="material-icons-sharp">apartment</span>
                    <h3>Company</h3>
                </a>
                <a id="setting" href="./setting">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                <a id="logout" onclick = "confirmlogout()">
                    <span class="material-icons-sharp ">logout</span>
                    <h3>Log out</h3>
                </a>
            </div>
        </aside>
        <!-- aside end -->
        <main>
            <h1>Dashboard</h1>
            <div class="insights">
                <div class="sales">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            @if(isset($data['total_sales']))
                            <h1>{{ $data['total_sales'] }}</h1>
                            @endif

                        </div>
                        <div class="progress">
                            <div class="number">
                                <img src="./images/sales.png" alt="">
                                <!-- <p>81%</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- <small class="text-muted">Last 24 Hours</small> -->
                </div>
                <!-- End Sales -->
                <div class="expenses">
                    <span class="material-icons-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Categories</h3>
                            @if(isset($data['total_category']))
                            <h1>{{ $data['total_category'] }}</h1>

                            @endif
                        </div>
                        <div class="progress">
                            <div class="number">
                                <img src="./images/category.jpg" alt="">
                                <!-- <p>62%</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- <small class="text-muted">Last 24 Hours</small> -->
                </div>
                <!-- End Expenses -->

                <div class="product">
                    <span class="material-icons-sharp">inventory_2</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Products</h3>
                            @if(isset($data['total_product']))
                            <h1>{{ $data['total_product'] }}</h1>
                            @if($data['total_product'] < 5) <div class="notification">
                                <p style="color:red;">You are out of stock!</p>
                        </div>
                        @endif
                        @endif
                    </div>
                    <div class="progress">
                        <div class="number">
                            <img src="./images/product.jpg" alt="">
                            <!-- <p>44%</p> -->
                        </div>
                    </div>
                </div>
                <!-- <small class="text-muted">Last 24 Hours</small> -->
            </div>

            <!-- End Income -->

            <div class="member a">
                <span class="material-icons-sharp">groups_2</span>
                <div class="middle">
                    <div class="left">

                        <h3>Total Members</h3>
                        @if(isset($data['total_member']))
                        <h1>{{ $data['total_member'] }}</h1>
                        @endif
                    </div>
                    <div class="progress">
                        <div class="number">
                            <img src="./images/teami.jpg" alt="">
                            <!-- <p>44%</p> -->
                        </div>
                    </div>
                </div>
                <!-- <small class="text-muted">Last 24 Hours</small> -->
            </div>

            <div class="income a">
                <span class="material-icons-sharp">reorder</span>
                <div class="middle">
                    <div class="left">
                        <h3>Unpaid Orders</h3>
                        @if(isset($data['unpaid_amount']))
                        <h1>{{ $data['unpaid_amount'] }}</h1>

                        @endif
                    </div>
                    <div class="progress">
                        <div class="number">
                            <img src="./images/unorder.jpg" alt="">
                            <!-- <p>44%</p> -->
                        </div>
                    </div>
                </div>
                <!-- <small class="text-muted">Last 24 Hours</small> -->
            </div>

            <div class="order a">
                <span class="material-icons-sharp">list_alt</span>
                <div class="middle">
                    <div class="left">
                        <h3>Paid Orders</h3>
                        @if(isset($data['paid_amount']))
                        <h1>{{ $data['paid_amount'] }}</h1>
                        @endif
                    </div>
                    <div class="progress">
                        <div class="number">
                            <img src="./images/order.jpg" alt="">
                            <!-- <p>44%</p> -->
                        </div>
                    </div>
                </div>
                <!-- <small class="text-muted">Last 24 Hours</small> -->
            </div>

    </div>
    <!-- End of insights -->
    </main>
    <!-- main end -->

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
                    <small class="text-muted">{{  auth()->user()->role ==='1' ?'Admin' : 'Member' }}</small>
                    {{-- <small class="text-muted" ><input type="text" value="User" style="color:#677483" disabled/></small> --}}
                </div>
                <div class="profile-photo">
                    <img src="./images/photo.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Top end -->

        <div class="recent-updates">
            <h2>Recent Activity</h2>
            <div class="updates" style="max-height: 300px;overflow-y: scroll;">
                @if(Auth::check())
                <p>
                    <h4 style="display:inline">{{ Auth::user()->name }}</h4> just logged in.
                </p> <br>
                @endif

                @if(isset($data['profile']))
                @foreach($data['profile'] as $index => $customer)
                <p>
                    <h4 style="display:inline">{{ $customer }}</h4> has been added in.
                </p> <br>
                @endforeach
                @endif


                @if(isset($data['category']))
                @foreach($data['category'] as $index => $customer)
                <p>
                    <h4 style="display:inline">{{ $customer }}</h4> has been added in.
                </p> <br>
                @endforeach
                @endif

                @if(isset($data['product']))
                @foreach($data['product'] as $index => $customer)
                <p>
                    <h4 style="display:inline">{{ $customer }}</h4> has been added in.
                </p> <br>
                @endforeach
                @endif

                @if(isset($data['member']))
                @foreach($data['member'] as $index => $customer)
                <p>
                    <h4 style="display:inline">{{ $customer }}</h4> has been added in.
                </p> <br>
                @endforeach
                @endif

            </div>
        </div>

        <div class="recent-updates">
            <h2>Recent Orders</h2>
            <div class="updates">
                @if(isset($data['customer_name']))
                @foreach($data['customer_name'] as $index => $customer)
                <p>
                    <h4 style="display:inline">{{ $customer }}</h4>'s order has been placed.
                </p><br>
                @endforeach
                @endif
            </div>
        </div>


        <!-- end of recent updates -->
    </div>
    </div>
    <script src="{{ asset('jsfile/index.js') }}"></script>
    <script>
      function confirmlogout() {
    if (confirm("Are you sure you want to logout?")) {
        // Redirect the user to the payment confirmation page
        window.location.href = '{{  route('logout') }}';
    }
}
    </script>
</body>

</html>

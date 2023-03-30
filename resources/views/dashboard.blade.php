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
        <main>
            <h1>Dashboard</h1>
            <!-- <div class="date">
        <input type="date">
      </div> -->

            <div class="insights">

                <div class="sales">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>25,000</h1>
                        </div>
                        <div class="progress">
                            <!-- <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg> -->
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
                            <h1>25,000</h1>
                        </div>
                        <div class="progress">
                            <!-- <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg> -->
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
                            <h1>25,675</h1>
                        </div>
                        <div class="progress">
                            <!-- <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg> -->
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
                            <h1>5</h1>
                        </div>
                        <div class="progress">
                            <!-- <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg> -->

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
                            <h1>25,675</h1>
                        </div>
                        <div class="progress">
                            <!-- <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg> -->
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
                            <h1>25,675</h1>
                        </div>
                        <div class="progress">
                            <!-- <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg> -->
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



            <!-- <div class="recent-orders">
        <h2>Recent Orders</h2>
        <table>
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Product Number</th>
              <th>Payment</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Foldable</td>
              <td>87586</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>Foldable</td>
              <td>87586</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>Foldable</td>
              <td>87586</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>Foldable</td>
              <td>87586</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>Foldable</td>
              <td>87586</td>
              <td>Due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
          </tbody>
        </table>
        <a href="#">Show All</a>
      </div> -->
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
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- Top end -->


            <!-- <div class="main2">
    <div class="members">
      <div class="sales">
        <span class="material-icons-sharp">analytics</span>
        <div class="middle">
          <div class="left">
            <h3>Total Sales</h3>
            <h1>25,000</h1>
          </div>
          <div class="progress">
            <svg>
              <circle cx="38" cy="38" r="36"></circle>
            </svg>
            <div class="number">
              <p>81%</p>
            </div>
          </div>
        </div>
        <small class="text-muted">Last 24 Hours</small>
      </div>
    </div>
      member end -->

            <div class="main2">
                <div class="recent-orders">
                    <h2>Recent Orders</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Activity</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Your mom just logged in.</td>
                                <td><span class="material-icons-sharp">done</span></td>

                            </tr>
                            <tr>
                                <td>Foldable</td>
                                <td><span class="material-icons-sharp">done</span></td>
                            </tr>
                            <tr>
                                <td>Foldable</td>
                                <td><span class="material-icons-sharp">done</span></td>
                            </tr>
                            <tr>
                                <td>Foldable</td>
                                <td><span class="material-icons-sharp">done</span></td>
                            </tr>
                            <tr>
                                <td>Foldable</td>
                                <td><span class="material-icons-sharp">done</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <a href="#">Show All</a> -->
                </div>
            </div>

            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> received his order of Night lion tech GPS drone.</p>
                            <!-- <small class="text-muted">2 Minutes Ago</small> -->
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-3.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> received his order of Night lion tech GPS drone.</p>
                            <!-- <small class="text-muted">2 Minutes Ago</small> -->
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-4.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> received his order of Night lion tech GPS drone.</p>
                            <!-- <small class="text-muted">2 Minutes Ago</small> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of recent updates -->



            <!-- <div class="sales-analytics">
      <h2>Sales Analytics</h2>
      <div class="item online">
        <div class="icon">
          <span class="material-icons-sharp">shopping_cart</span>
        </div>
        <div class="right">
          <div class="info">
            <h3>ONLINE ORDERS</h3>
            <small class="text-muted">Last 24 Hours</small>
          </div>
          <h5 class="success">+39%</h5>
          <h3>3849</h3>
        </div>
      </div>
      <div class="item offline">
        <div class="icon">
          <span class="material-icons-sharp">local_mall</span>
        </div>
        <div class="right">
          <div class="info">
            <h3>OFFLINE ORDERS</h3>
            <small class="text-muted">Last 24 Hours</small>
          </div>
          <h5 class="danger">-17%</h5>
          <h3>1100</h3>
        </div>
      </div>
      <div class="item customers">
        <div class="icon">
          <span class="material-icons-sharp">person</span>
        </div>
        <div class="right">
          <div class="info">
            <h3>NEW CUSTOMERS</h3>
            <small class="text-muted">Last 24 Hours</small>
          </div>
          <h5 class="success">+25%</h5>
          <h3>849</h3>
        </div>
      </div>
      
      

      <div class="item add-product">
        <div>
          <span class="material-icons-sharp">add</span>
          <h3>Add Product</h3>
        </div>
        
      </div>
      </div> -->
        </div>
    </div>
    </div>
    <script src="{{ asset('jsfile/index.js') }}"></script>
</body>

</html>

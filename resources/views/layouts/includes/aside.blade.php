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
                <a href="./dashboard" class="">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a id="category" href="./category" class="{{ Request::is('category') ? 'active' : '' }}">
                    <span class="material-icons-sharp">category</span>
                    <h3>Category</h3>
                </a>
                <a id="order" href="./order" class="{{ Request::is('order') ? 'active' : '' }}">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Orders</h3>
                </a>
                <a id="product" href="./product" class="{{ Request::is('product') ? 'active' : '' }}">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Products</h3>
                </a>
                <a id="member" href="./member" class="{{ Request::is('member') ? 'active' : '' }}">
                    <span class="material-icons-sharp">groups</span>
                    <h3>Members</h3>
                </a>
                <a id="company" href="./company" class="{{ Request::is('company') ? 'active' : '' }}">
                    <span class="material-icons-sharp">apartment</span>
                    <h3>Company</h3>
                </a>
                <a id="setting" href="./setting" class="{{ Request::is('setting') ? 'active' : '' }}">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                <a id="logout" href="{{ route('logout') }}">
                    <span class="material-icons-sharp ">logout</span>
                    <h3>Log out</h3>
                </a>
            </div>
        </aside>

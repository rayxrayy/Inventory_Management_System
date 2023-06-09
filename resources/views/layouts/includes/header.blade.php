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
                <small class="text-muted">{{  auth()->user()->role === '1' ? 'Admin' : 'Member' }}</small>
            </div>
            <div class="profile-photo">
                <img src="./images/photo.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Top end -->
</div>

@extends('layouts.home')
   <link rel="stylesheet" href="{{ asset('cssfile/stylecompany.css') }}">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
@section('content')
<h1>About Us</h1>
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
@endsection

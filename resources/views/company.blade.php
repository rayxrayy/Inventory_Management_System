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
            <p> At CargoRex, we are a leading manufacturer and trader of high-quality glue boxes and chemicals.
                With years of experience in the industry, we have built a reputation for delivering premium products and exceptional customer service.
                Contact us today to learn more about our products and services.</p>


            <div class="btn_wrap">
                <span>Share</span>
                <div class="container1">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.messenger.com/" target="_blank"><i class="fab fa-facebook-messenger"></i></a>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

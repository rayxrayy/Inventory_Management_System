<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>
    <!--Material Icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cssfile/styles.css') }}">
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <style>
    /* Dark theme variables */
 .dark-theme-variables {
    --color-background: #181a1e;
    --color-white: #202528;
    --color-dark: #edeffd;
    --color-dark-variant: #a3bdcc;
    --color-light: rgba(0,0,0,0.4);
    --box-shadow: 0 2rem 3rem var(--color-light);
}


* {
    margin: 0;
    padding: 0;
    outline: 0;
    appearance: none;
    border: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}

html {
    font-size: 14px;
}

body {
    width: 100vw;
    height: 100vh;
    font-family: poppins, sans-serif;
    font-size: 0.88rem;
    background: var(--color-background);
    user-select: none;
    overflow-x: hidden;
    color: var(--color-dark);
}

.container {
    display: grid;
    width: 96%;
    margin: 0 auto;
    gap: 2.8rem;
    grid-template-columns: 16rem auto;
}
a {
    color: var(--color-dark);
}

img {
    display: block;
    width: 100%;
}

h1 {
    font-weight: 800;
    font-size: 1.8rem;
}

h2 {
    font-size: 1.4rem;
}

h3 {
    font-size: 0.87rem;
}

h4 {
    font-size: 0.8rem;
}

h5 {
    font-size: 0.77rem;
}

small {
    font-size: 0.75rem;
}

.profile-photo {
    width: 2.8rem;
    height: 2.8rem;
    border-radius: 50%;
    overflow: hidden;
}

.text-muted {
    color: var(--color-info-dark);
}

p {
    color: var(--color-dark-variant);
}

b {
    color: var(--color-dark);
}

.primary {
    color: var(--color-primary);
}
.danger {
    color: var(--color-danger);
}
.success {
    color: var(--color-success);
}
.warning {
    color: var(--color-warning);
}

aside {
    height: 100vh;

}

aside.top {

    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 1.4rem;

}

aside .logo {
    display: flex;
    gap: 0.8rem;
    /**/
    position: absolute;
    top: 10px;
    /**/
}

aside .logo img {
    width: 2rem;
    height: 2rem;
}

aside .close {
    display: none;
}

/*Side Bar*/

aside .sidebar {

    display: flex;
    flex-direction: column;
    height: 86vh;
    position: relative;
    /* top: 3rem; */
    top: 7rem;
}

aside h3 {
    font-weight: 500;
}

aside .sidebar a {
    display: flex;
    color: var(--color-info-dark);
    margin-left: 2rem;
    gap: 1rem;
    align-items: center;
    position: relative;
    height: 3.7rem;
    transition: all 300ms ease;
}

aside .sidebar a span {
    font-size: 1.6rem;
    transition: all 300ms ease;
}

aside .sidebar a:last-child {
    position: absolute;
    bottom: 2rem;
    width: 100%;
}

aside .sidebar a.active {
    background: var(--color-light);
    color: var(--color-primary);
    margin-left: 0;
}


.active {
    background: var(--color-light);
    color: var(--color-primary);
    margin-left: 0;
}


aside .sidebar a.active:before {
    content: "";
    width: 6px;
    height: 100%;
    background: var(--color-primary);
}

aside .sidebar a.active span {
    color: var(--color-primary);
    margin-left: calc(1rem - 3px);
}

aside .sidebar a:hover {
    color: var(--color-primary);
}

aside .sidebar a:hover span {
    margin-left: 1rem;
}

aside .sidebar .message-count {
    background: var(--color-danger);
    color: var(--color-white);
    padding: 2px 10px;
    font-size: 11px;
    border-radius: var(--border-radius-1);
}

/* MAIN */

main {
    margin-top: 1.4rem;
}



/* Recent orders */

main .recent-orders {
    margin-top: 4rem;
}

main .recent-orders h2 {
    margin-bottom: 0.8rem;
}

main .recent-orders table {
    background: var(--color-white);
    width: 100%;
    border-radius: var(--card-borde-radius);
    padding: var(--card-padding);
    text-align: center;
    box-shadow: var(--box-shadow);
    transition: all 300ms ease;

    margin-top: 3rem;
}

/* order table space below */
.belowtable {
    margin-bottom: 3rem;
}

main .recent-orders table:hover {
    box-shadow: none;
}

main table tbody td {
    height: 2.8rem;
    border-bottom: 1px solid var(--color-light);
    color: var(--color-dark-variant);
    padding: 4px 0;
}

/* table tr height for image order, product only */
/* main table tbody .height1 {
    height: 3.8rem;

} */




/* table button */
main table tbody .action button {
    /* width: 10%; */
    background: var(--color-primary);
    border-radius: var(--border-radius-1);
    color: var(--color-dark);
    border: 2px solid var(--color-primary);
}

/* table td image */
main table tbody .table_image {

   display: flex;
   justify-content: center;
   padding: 2px;
}

.profile-photo1 {
    width: 2.4rem;
    height: 2.4rem;
    border-radius: 50%;
    overflow: hidden;
}



main table tbody tr:last-child td {
    border: none;
}

main .recent-orders a {
    text-align: center;
    display: block;
    margin: 1rem auto;
    color: var(--color-primary);
}

/* main category */

main .category {
    margin-top: 25px;
    padding: 5px;
}
main .category button {
    background: var(--color-primary);
    color: var(--color-dark);
    font-size: 20px;
    font-weight: 800;
    border: 2px solid var(--color-primary);
    padding: 20px 25px;
    border-radius: var(--border-radius-1);
    box-shadow: var(--box-shadow);
}
main .category button:hover {
box-shadow: none;
}

/* product button icon */
main .category button.space {
    display: block;
    margin: 5px 0 22px 0;

}

/* order form button */
main .category button.order-btn {
    padding: 0 5px;

}

.spaces {
    margin-top: 50px;
}




.theme-product {
    position: absolute;
    top: 15px;
    right: 15px;

}

.theme-product span{
    display: block;

}


/* button spacing */

.close , .excel{
    margin-left: 15px;
}


/* right top*/

.right {
    margin-top: 1.4rem;
}

.right .top {
    display: flex;
    justify-content: end;
    gap: 2rem;

}

.right .top button {
    display: none;
}

.right .theme-toggler {
    background: var(--color-light);
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 1.6rem;
    width: 4.2rem;
    cursor: pointer;
    border-radius: var(--border-radius-1);
}

.right .theme-toggler span {
    font-size: 1.2rem;
    width: 50%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.right .theme-toggler span.active {
    background: var(--color-primary);
    color: white;
    border-radius: var(--border-radius-1);
}

.right .top .profile {
    display: flex;
    gap: 2rem;
    text-align: right;
}




/* add category form */

/* The popup form - hidden by default */
.form-popup {
    display: none;
    position: absolute;
    top: 2px;
    left: 42%;
    /* bottom: 0; */
    /* right: 15px; */
    background: var(--color-background);
    border: 3px solid var(--color-white);
    border-radius: var(--border-radius-2);
    z-index: 9;
  }

  /* Add styles to the form container */
  .form-container {
    /* width: 100%; */
    /* max-width: fit-content; */
    max-width: 600px;/* 100%;  */
    padding: 10px;
    background: var(--color-white);
    padding: var(--card-padding);
    box-shadow: var(--box-shadow);
    transition: all 300ms ease;

  }


  /* .form-container input {
     border-radius: 1px solid var(--color-dark);

  } */

  /* Full-width input fields */
  .form-container input[type=text] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    border: 1px solid var(--color-info-dark);
    border-radius: 5px;
  }

  .form-container h1 {
    margin-bottom: 7px;
  }

select {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    border: 1px solid var(--color-info-dark);
    border-radius: 5px;
}


  /* form button */





  /* form product */
  .form-popup-product {
    display: none;
    position: absolute;
    top: 2px;
    left: 19%;
    /* left: 0; */
    /* bottom: 0; */
    /* right: 15px; */
    background: var(--color-background);
    border: 3px solid var(--color-white);
    border-radius: var(--border-radius-2);
    z-index: 9;
  }

  /* Add styles to the form container */
  .form-container-product {
    width: 100%;
    /* max-width: fit-content; */
    /* max-width: 600px;100%;  */
    padding: 10px;

  }


  /* .form-container input {
     border-radius: 1px solid var(--color-dark);

  } */

  /* Full-width input fields */
  .form-container-product input[type=text] , .form-container-product select, .form-container-product input[type=number] {
    width: 100%;
    /* width: 80%; */
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    border: 1px solid #363949;
    border-radius: 5px;
  }

  .form-container-product h1 {
    margin-bottom: 7px;
  }



  /* product image button */
  #imageContainer {
    width: 375px;
    height: 211px;
    border: 1px solid var(--color-dark);
    background-position: center;
    background-size: cover;
  }





  /* #display_image {
    width: 375px;
    height: 211px;
    border: 1px solid var(--color-dark);
    background-position: center;
    background-size: cover;
  } */
  /* setting form */
  /* .form-popup-setting {
    display: block;
    /* position: absolute;
    top: 2px;
    left: 19%; */
    /* left: 0; */
    /* bottom: 0; */
    /* right: 15px; */
    /*background: var(--color-background);
    border: 3px solid var(--color-white);
    border-radius: var(--border-radius-2);
    z-index: 9;
  } */


  .flex {
    display: flex;
    justify-content: space-around;
    margin-top: 52px;
    /* flex-direction: column; */
    /* justify-content: center; */
  }
  /* Add styles to the form container */
  .form-container-setting {
    width: 100%;
    /* max-width: fit-content; */
    /* max-width: 600px;100%;  */
    padding: 10px;

  }

.box {
    padding: 20px;
    border: 1px solid #fff;
    width: 45%;
    border-radius: var(--border-radius-2);
    box-shadow: var(--box-shadow);
    transition: all 300ms ease;
}

  /* .form-container input {
     border-radius: 1px solid var(--color-dark);

  } */

  /* Full-width input fields */
  .form-container-setting input[type=text] ,.form-container-setting input[type=email], .form-container-setting input[type=password], .form-container-setting select, .form-container-setting input[type=number] {
    /* width: 100%;  */
    /* width: 80%; */
    display: block;
    width: 80%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    border: 1px solid #b098f3;
    border-radius: 5px;
  }

  .form-container-setting h1 {
    margin-bottom: 7px;
  }


  /* company page  */

  .about {
    width: 100%;
    padding: 78px 0px;
    background: var(--color-background);
    /* background-color: #191919; */
}

.about img {
    height: auto;
    width: 420px;
}

.about-text {
    width: 550px;
}

.main {
    width: 1130px;
    max-width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

/* .about-text h1 {
    color: white;
    font-size: 80px;
    text-transform: capitalize;
    margin-bottom: 20px;
} */

.about-text h5 {
    color: var(--color-dark);
    /* color: white; */
    font-size: 25px;
    text-transform: capitalize;
    margin-bottom: 25px;
    letter-spacing: 2px;
}

.about-text span {
    /* color: #f9004d; */
    color: var(--color-danger);
}

.about-text p {
    color: var(--color-dark-variant);
    /* color: #fcfc; */
    letter-spacing: 1px;
    line-height: 28px;
    font-size: 18px;
    margin-bottom: 45px;
}
/* company page  image*/
:root {
    --size: 150px;
    --radius: calc(var(--size) * 20 / 100);
  }




.image-card {
    width: var(--size);
    height: var(--size);
    border-radius: var(--radius);
    position: relative;
    background-size: cover;
    margin: calc(var(--size) * 20 / 100);
    box-shadow: none;

}

.image-card:hover {
    box-shadow: 0 2rem 5rem var(--color-dark);
    }

  .image-card:before {
    content: "";
    position: absolute;
    width: 90%;
    height: 100%;
    background-image: inherit;
    background-size: cover;
    border-radius: var(--radius);
    z-index: -1;
    filter: blur(12px);
    opacity: 0.6;
    left: 50%;
    transform: translate(-50%, 10%);
  }


/* company button */
.btn_wrap i{
    opacity: 0;
    font-size: 28px;
    color: #1F1E1E;
    will-change: transform;
    -webkit-transform: scale(.1);
    transform: scale(.1);
    -webkit-transition: all .0s ease;
    transition: all .3s ease;
}


.btn_wrap {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    overflow: hidden;
    cursor: pointer;
    /* width: 240px;
    height: 72px; */
    width: 200px;
    height: 60px;
    background-color: var(--color-info-light);
    border-radius: 80px;
    padding: 0 18px;
    will-change: transform;
    -webkit-transition: all .2s ease-in-out;
    transition:  all .2s ease-in-out;
}

.btn_wrap:hover {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}

.btn_wrap span {
    position: absolute;
    z-index: 99;
    /* width: 240px;
    height: 72px; */
    width: 200px;
    height: 60px;
    border-radius: 80px;
    font-size: 20px;
    text-align: center;
    line-height: 60px;
    letter-spacing: 2px;
    color: var(--color-white);
    background-color: var(--color-dark);
    padding: 0 18px;
    -webkit-transition: all 1.2s ease;
    transition: all 1.2s ease;
}

.container1 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 200px;
    height: 60px;
    /* width: 240px;
    height: 64px; */
    border-radius: 80px;
}

.container1 i:nth-of-type(1) {
    -webkit-transition-delay: 1.1s;
    transition-delay: 1.1s;
}

.container1 i:nth-of-type(2) {
    -webkit-transition-delay: .9s;
    transition-delay: .9s;
}
.container1 i:nth-of-type(3) {
    -webkit-transition-delay: .7s;
    transition-delay: .7;
}
.container1 i:nth-of-type(4) {
    -webkit-transition-delay: .4s;
    transition-delay: .4s;
}

.btn_wrap:hover span {
    -webkit-transition-delay: .25s;
    transition-delay: .25s;
    -webkit-transform: translateX(-280px);
    transform: translateX(-280px);
}

.btn_wrap:hover i {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}
  /* company page banner h2 and h3 */


  /* .banner h2 {
    white-space: nowrap;
    margin: 0 0 4px;
    font-size: 40px;
    color: var(--color-dark);
}

.banner h3 {
    font-weight: 400;
    margin: 0;
    color: var(--color-dark);
} */





  /* .section {
    width: 100%;
    min-height: 100vh;
    background-color: #ddd;
  }

  .container {
    width: 80%;
    display: block;
    margin: auto;
    padding-top: 100px;

  }

  .content-section {
    float: left;
    width: 55%;
  }

  .image-section {
    float: right;
    width: 40%;
  }

  .image-section img{
    height: auto;
    width: 100%;
  } */



  /* theme change product form */
  /* .theme-toggler {
    background: var(--color-light);
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 1.6rem;
    width: 4.2rem;
    cursor: pointer;
    border-radius: var(--border-radius-1);
}

.theme-toggler span {
    font-size: 1.2rem;
    width: 50%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.theme-toggler span.active {
    background: var(--color-primary);
    color: white;
    border-radius: var(--border-radius-1);
} */















/* Media  Queries */

@media screen and (max-width: 1200px) {

    .container {
        width: 94%;
       grid-template-columns: 7rem auto 12rem;
    }

    aside .logo h2 {
        display: none;
    }

    aside .sidebar h3 {
        display: none;
    }

    aside .sidebar a {
        width: 5.6rem;
    }

    aside .sidebar a:last-child{
        position: relative;
        margin-top: 1.8rem;
    }

    main .insights {
        grid-template-columns: 1fr;
        gap: 0;
    }

    main .recent-orders {
        width: 94%;
        position: absolute;
        left: 0%;
        transform: translateX(-50%);
        margin: 2rem 0 0 8.8rem;
    }

    main .recent-orders table {
        width: 83vw;
    }

    main table thead tr th:last-child,
    main table thead tr th:first-child {
        display: none;
    }

    main table tbody tr td:last-child,
    main table tbody tr td:first-child {
        display: none;
    }

}

@media screen and (max-width: 768px) {
    .container {
        width: 100%;
        grid-template-columns: 1fr;
    }

    aside {
        position: fixed;
        left: -100%;
        background: var(--color-white);
        width: 18rem;
        z-index: 3;
        box-shadow: 1rem 3rem 4rem var(--color-light);
        height: 100vh;
        padding-right: var(--card-padding);
        display: none;
        animation: showMenu 400ms ease forwards;
    }

    @keyframes showMenu {
        to {
            left: 0;
        }
    }
    aside .logo {
        margin-left: 1rem;
        /**/
        position: absolute;
        top: 8px;
        /**/
    }

    aside .logo h2 {
        display: inline;
    }

    aside .sidebar h3 {
        display: inline;
    }

    aside .sidebar a {
        width: 100%;
        height: 3.4rem;
    }

    aside .sidebar a:last-child {
        position: absolute;
        bottom: 5rem;
    }

    aside .close {
        display: inline-block;
        cursor: pointer;
        /**/
        position: absolute;
    left: 203px;
    top: 8px;
    /**/
    }

    main {
        margin-top: 8rem;
        padding: 0 1rem;
    }

    main .recent-orders {
        /* position: relative; */
        position: absolute;
        left: 55%;
        margin: 3rem 0 0 0;
        /* width: 100%; */
        width: 80%;
    }

    main .recent-orders table {
        /* width: 100%; */
        width: 50%;
        margin: 0;
    }

    .right {
        width: 94%;
        margin: 0 auto 4rem;
    }

    .right .top {
        position: fixed;
        top: 0;
        left: 0;
        align-items: center;
        padding: 0 0.8rem;
        height: 4.6rem;
        background: var(--color-white);
        width: 100%;
        margin: 0;
        z-index: 2;
        box-shadow: 0 1rem 1rem var(--color-light);
    }

    .right .top .theme-toggler {
        width: 4.4rem;
        position: absolute;
        left: 66%;
    }

    .right .profile .info {
        display: none;
    }

    .right .top button {
        display: inline-block;
        background: transparent;
        cursor: pointer;
        color: var(--color-dark);
        position: absolute;
        left: 1rem;

    }

    .right .top button span {
        font-size: 2rem;
    }
}
    </style>
</head>
<body>
<div class="container">
    @include('layouts.includes.aside')

    <main>
        @include('layouts.includes.header')
        @yield('content')
    </main>

</div>
<script src="{{ asset('jsfile/index.js') }}"></script>
@yield('script')
</body>
</html>

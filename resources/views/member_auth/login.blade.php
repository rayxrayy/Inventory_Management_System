<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('cssfile/login.css')}}">

    <title>Sign in Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="post" action='{{ route('member.login') }}' class="sign-in-form">
                    <div class="login-header">
                        <h1>Welcome to Member Portal</h1>
                        <p>Please login to use the platform</p>
                    </div>
                    <form class="login-form" action='{{  route('login') }}' autocomplete="off" method="POST">
                        @csrf
                        <div class="login-form-content">
                            <div class="form-item">

                                <label for="emailForm">Enter Email</label>
                                <input type="text" id="emailForm" name="email" required>

                            </div>
                            {{-- @if (session()->has('failed'))
                        <div class="error-message">{{ session()->get('failed') }}</div>
                        <div>{{  }}</div>
                        @endif --}}
                            <div class="form-item">
                                <label for="passwordForm">Enter Password</label>
                                <input type="password" id="passwordForm" name="password" required>
                            </div>
                            <div class="form-item">
                                <div class="checkbox">
                                    <input type="checkbox" id="rememberMeCheckbox" checked>
                                    <label class="checkboxLabel" for="rememberMeCheckbox">Remember me</label>
                                    <div>
                                        <a class="btn btn-link" href="./forgot-password">
                                            <span class="material-icons-sharp ">| Forgot password</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <button name="submit" type="submit">log In</button>
                            <!-- <button onsubmit="return index()" >login</button>  -->
                        </div>
                    </form>
                </form>
                <form action="#" class="sign-up-form">
                    <div class="login-header">
                        <h4>Welcome to Our Application</h4>
                        <p>At CargoRex, we are a leading manufacturer and trader of high-quality glue boxes and chemicals. With years of experience in the industry, we have built a reputation for delivering premium products and exceptional customer service.

Our state-of-the-art manufacturing facility employs the latest technologies and processes to ensure that our products meet the highest standards of quality and reliability. We use only the best materials and ingredients to produce our products, and we constantly strive to improve our processes to minimize waste and reduce our environmental impact.

In addition to manufacturing our own products, we also trade a wide range of chemical products, including adhesives, coatings, and sealants. Our experienced team of professionals has a deep understanding of the industry and can help you find the right products to meet your specific needs.

At CargoRex, we are committed to providing our customers with the best possible products and services. Whether you need custom glue boxes, specialty chemicals, or expert advice, we are here to help. Contact us today to learn more about our products and services.</p>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        This is our first project for you. There will be some problem, hope you consider it.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        View All
                    </button>
                </div>
                <img src="  images/log.svg.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        This is our first project for you. There will be some problem, hope you consider it.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="images/log.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="{{asset('jsfile/login.js')}}"></script>
</body>
</html>

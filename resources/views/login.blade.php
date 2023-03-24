<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('cssfile/login.css')}}">

    <title>Sign in Form</title>
</head>

<body>
    <h1>hello</h1>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="post" action='/login' class="sign-in-form">
                    <div class="login-header">
                        <h1>Welcome to Our Application</h1>
                        <p>Please login to use the platform</p>
                    </div>
                    <form class="login-form" autocomplete="off">
                     @csrf
                        <div class="login-form-content">
                            <div class="form-item">
                                <label for="emailForm">Enter Email</label>
                                <input type="text" id="emailForm">
                            </div>
                            <div class="form-item">
                                <label for="passwordForm">Enter Password</label>
                                <input type="password" id="passwordForm">
                            </div>
                            <div class="form-item">
                                <div class="checkbox">
                                    <input type="checkbox" id="rememberMeCheckbox" checked>
                                    <label class="checkboxLabel" for="rememberMeCheckbox">Remember me</label>
                                    <div>
                                        <a href="#">I Forgot Password!</a>
                                    </div>
                                </div>
                            </div>
                            <button name="submit" type="submit">log In</button>
                             <!-- <button onsubmit="return index()" >login</button>  -->
</div>
                        <div class="login-form-footer">
                            <a href="#">
                                <img width="30"
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1365px-Facebook_f_logo_%282019%29.svg.png">
                                Facebook Login
                            </a>
                            <a href="#">
                                <img width="30"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK5q0FP74VV9wbfwP378_7kj7iDomHuKrxkXsxDdUT28V9dlVMNUe-EMzaLwaFhneeuZI&usqp=CAU">
                                Google Login
                            </a>
                        </div>
                    </form>
                </form>
                <form action="#" class="sign-up-form">
                    <div class="login-header">
                        <h1>Welcome to Our Application</h1>
                        <p>Please login to use the platform</p>
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
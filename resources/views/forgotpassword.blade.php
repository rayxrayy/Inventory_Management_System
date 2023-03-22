<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('cssfile/forgotpassword.css')}}">

    <title>Forgot password</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form">
                    <div class="login-header">
                        <h1>Forgot Password</h1>
                    </div>
                    <form class="login-form" autocomplete="off">
                        <div class="login-form-content">
                            <div class="form-item">
                                <label for="emailForm">Enter Email</label>
                                <input type="text" id="emailForm">
                            </div>
                            <button type="submit">Sign In</button>
                            <div>
                                <p>Back to <a href="#">Login</a></p>
                         
                                    </div>
                        </div>
                    </form>
                </form>
    <script src="{{asset('jsfile/login.js')}}"></script>
</body>
</html>
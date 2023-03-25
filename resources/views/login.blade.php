<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('cssfile/login.css')}}">
    <title>Sign in Form</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
            <?php
                // Initialize variables
                $email = '';
                $password = '';
                $errors = array();

                // Check if form has been submitted
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Get values from form
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);

                if(empty($email) || empty($password)) {
                    echo "<div class='error-message'>Please provide email and password</div>";
                } else {
                    // Do something with email and password values, such as authenticate the user
                }

                // Validate email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors[] = 'Please enter a valid email address';
                }

                // Validate password
                if (empty($password)) {
                    $errors[] = 'Please enter your password';
                } elseif (strlen($password) < 8) {
                    $errors[] = 'Password must be at least 8 characters long';
                }

                // If there are no errors, try to authenticate the user
                if (empty($errors)) {
                    // Do something with email and password values, such as authenticate the user
                    // If authentication is successful, redirect to the dashboard or homepage
                    header('Location: /dashboard');
                    exit;
                }
            }
        ?>

        <form method="POST" action="/login" class="sign-in-form">
            <div class="login-header">
                <h1>Welcome to Our Application</h1>
                <p>Please login to use the platform</p>
            </div>
            @csrf
            <div class="login-form-content">
                <?php if (!empty($errors)): ?>
                <div class="form-errors">
                    <?php foreach ($errors as $error): ?>
                    <p><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <div class="form-item">
                    <label for="emailForm">Enter Email</label>
                    <input type="text" id="emailForm" name="email" value="<?php echo htmlspecialchars($email); ?>">
                </div>
                <div class="form-item">
                    <label for="passwordForm">Enter Password</label>
                    <input type="password" id="passwordForm" name="password">
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
            </div>
            @if (isset($array) && !empty($array) && in_array($value, $array)) {
    // Do something if the value exists in the array
}

    <div class="error-message">
        {{ $errors->first() }}
    </div>
@endif

@if (session('error'))
    <div class="error-message">
        {{ session('error') }}
    </div>
@endif

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
        </div

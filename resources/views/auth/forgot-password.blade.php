<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-eqiv="X-UA_compatible" content="ie=edge">
    <title>Forgot password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="Stylesheet" integrity="sha384-GLhlTQ8iRABdZLl603oVMWSktQOp6b7In1Z13/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<style>
    body {
        background: #d3d3d3;
    }

    .main {
        height: 100vh;
        display:flex;
        justify-content: center;
        align-items: center;
    }

    .form {
        background: #fff;
        padding: 50px 30px;
    }

</style>
<body>
    <div class="main">
        <div class="form">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    <ul>
            </div>
            @endif
            @if(session()->has('status'))
            <div class="alert alert-sucess">
                {{ session()->get('status') }}
            </div>
            @endif

            <h2> Forgot Your Password? </h2>
            <p>please enter your mail to password reset request</p>
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
                <input type="submit" value="Request Password Reset" class="btn btn-primary w-100 mt-3">
            </form>
        </div>
    </div>
</body>
</html>

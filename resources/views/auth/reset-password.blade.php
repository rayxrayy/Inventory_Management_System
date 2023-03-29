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
        width: 500px;
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
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ request()->token }}">
                <input type="hidden" name="email" value="{{ request()->email }}">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
                <label for="password_comfirmation" class="form-label">Password Configuration</label>
                <input type="password_comfirmation" class="form-control" name="password_comfirmation">
                <input type="submit" value="Update Password" class="btn btn-primary w-100 mt-3">
            </form>
        </div>
    </div>
</body>
</html>

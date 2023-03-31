<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-eqiv="X-UA_compatible" content="ie=edge">
    <title>Reset password</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<style>
    body {
         background: linear-gradient(45deg, #666dff, #FBFBFB);
    }

    .main {
        height: 100vh;
        display:flex;
        justify-content: center;
        align-items: center;
    }

    .form {
        background: linear-gradient(45deg, #666dff, #FBFBFB);
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
                <label for="password" class="form-label">Password Configuration</label>
                <input type="password" class="form-control" name="password_confirmation">
                <input type="submit" value="Update Password" class="btn btn-primary w-100 mt-3">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>

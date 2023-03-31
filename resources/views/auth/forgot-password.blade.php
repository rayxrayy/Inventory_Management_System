<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-eqiv="X-UA_compatible" content="ie=edge">
    <title>Forgot password</title>
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
        box-shadow: 0 0 10px rgba(0, 0, 3, 0.5);
         background: linear-gradient(45deg, #666dff, #FBFBFB);
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>

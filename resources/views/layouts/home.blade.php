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
</head>

<body>
<div class="container">

    @include('layouts.includes.aside')

    <main>
        @yield('content')
    </main>
        @include('layouts.includes.header')
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <h3>Hello {{ Auth::user()->name }}</h3>
        <a href="{{ route('logout') }}">Logout</a>
    </body>
</html>

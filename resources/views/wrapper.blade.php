<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Guano</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/0.png') }}"/>
    @yield('stylesheet')
</head>
<body>
    @yield('content')
    @yield('javascript')
</body>
</html>
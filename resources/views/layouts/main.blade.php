<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ Vite::asset('resources/img/dc-logo.png')}}" type="img/ico">
    <title>{{ env('APP_NAME')}} | @yield('title')</title>


    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- CDNS -->
    @yield('cdns')

    <!-- Import Vite -->
    @vite('resources/js/app.js')
</head>

<body>
    @yield('welcome-content')
    

</body>

</html>
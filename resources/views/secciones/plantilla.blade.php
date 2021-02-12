<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="{{mix('css/estilos.css')}}">
    <link rel="icon" href="{{asset('imgs/icons/Favicon.png')}}">

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.hoverIntent.min.js')}}"></script>
</head>
<body>
    <livewire:header>   
    <livewire:navigation-servicios>
    <livewire:informacion-top>
    @yield('titulo')
    @yield('content')
    <livewire:footer>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script src="{{asset('js/estilos-v2.js')}}"></script>
</body>
</html>
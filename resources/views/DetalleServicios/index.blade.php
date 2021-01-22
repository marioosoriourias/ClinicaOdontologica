<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clinica Odontologica</title>
    @livewireStyles
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
</head>
<body class="overscroll-auto">
    <livewire:header>
    
    <livewire:navigation-servicios>
    

    <h1 class="text-3xl md:text-4xl text-center  mt-8 md:mt-24">{{trans('multi-leng.'.$servicio[0])}}</h1>
    
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-1 mt-6 md:mt-20">
        <img class="float-right" src="{{$servicio[2]}}" alt="">
        <span class="px-5 text-justify text-xl">
     
            <p>
                labore vero. Illo suscipit tempore officia! Animi, esse officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis corrupti corporis quibusdam facere rerum! Molestiae hic voluptates obcaecati officia. Tenetur illo atque a eos, quos temporibus est. Minima, iure recusandae.
            </p>
            <br>
            <p>
                labore vero. Illo suscipit tempore officia! Animi, esse officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis corrupti corporis quibusdam facere rerum! Molestiae hic voluptates obcaecati officia. Tenetur illo atque a eos, quos temporibus est. Minima, iure recusandae.
            </p>
        </span>
    </div>

    
    <livewire:footer>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <!-- Código de instalación Cliengo para conkers_65@hotmail.com --> 
</body>
</html>


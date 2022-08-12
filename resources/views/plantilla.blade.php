<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Import google fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    {{-- CSS Public/css --}}
    <link rel="stylesheet" href="{{asset('css/stylesPlantilla.css')}}">

    {{-- Icons for Font Awesome --}}
    <script src="https://kit.fontawesome.com/a3883496fa.js" crossorigin="anonymous"></script>

    <title>@yield('titulo')</title>

    @yield('header')

</head>

<body>

    <header>
        <div class="header-top">
            <span><i class="fa-solid fa-phone"></i><b> Teléfono de contacto: </b>(602)8942322 - 8942323 <b> - Ext</b>(11-12-13-14-16-17-18)</span>
            <span> - - - <i class="fa-solid fa-envelope"></i><b> Correo de contacto: </b><a href="mailto:darwinsantiago2003@hotmail.com">IE@iejosehgarcescali.edu.co</a></span>
            <span> - - - <i class="fa-solid fa-square-share-nodes"></i><b> Redes sociales: </b><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a></span>
        </div>

        <nav class="navbar">
            <a class="navbar-logo" href="#"><img src="{{url('img/logo.png')}}" alt=""></a>
            <ul>
                <li><a href="#"><b>Inicio</b></a></li>
                <li><a href="#"><b>Sobre nosotros</b></a></li>
                <li><a href="#"><b>PQRS</b></a></li>
            </ul>
            <div class="menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
        
    </header>



    @yield('contenido')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    @yield('scripts')

    @yield('footer')
    <footer>PRUEBA PRUEBA PRUEBA</footer>

</body>

</html>

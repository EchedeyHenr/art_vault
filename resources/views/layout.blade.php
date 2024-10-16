<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Art-Vault</title>
        <link rel="stylesheet" href="{{ asset('css/global.css') }}">
        @yield('styles')
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="navbar__title">
                    <h1>Art-Vault</h1>
                </div>
                <div class="navbar__links">
                    <a class="button" href="{{ route('paintings.create') }}">Crear Nueva Obra</a>
                    <a class="button" href="{{ url('/') }}">Inicio</a>
                </div>
            </nav>
        </header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

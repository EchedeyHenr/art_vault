<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
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
                @if (Route::is('paintings.show'))
                    <a class="navbar__button navbar__button--edit"
                        href="{{ route('paintings.edit', $painting->id) }}">Editar</a>
                    <a class="navbar__button navbar__button--list" href="{{ route('paintings.index') }}">Volver a Lista
                        de Cuadros</a>
                @elseif (Route::is('paintings.create') || Route::is('paintings.edit'))
                    <a class="navbar__button navbar__button--list" href="{{ route('paintings.index') }}">Volver a Lista
                        de Cuadros</a>
                @else
                    <a class="navbar__button navbar__button--create" href="{{ route('paintings.create') }}">Crear Nueva
                        Obra</a>
                @endif
                <a class="navbar__button navbar__button--home" href="{{ url('/') }}">Inicio</a>
            </div>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer class="footer">
        <div class="footer__content">
        <p class="footer__text">&copy; {{ date('Y') }} Art-Vault. Todos los derechos reservados.</p>
        <nav class="footer__nav">
            <a class="footer__link" href="{{ route('about') }}">Acerca de</a>
            <a class="footer__link" href="{{ route('contact') }}">Contacto</a>
        </nav>
        </div>
    </footer>
</body>

</html>

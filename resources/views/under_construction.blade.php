<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>En Construcción</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>

<body>
    <div class="construction-container">
        <h1>Esta página está en construcción</h1>
        <p>Volveremos pronto.</p>
        <a class="navbar__button navbar__button--home" href="{{ url('/') }}">Inicio</a>
        <a class="navbar__button navbar__button--list" href="{{ route('paintings.index') }}">Volver a Lista
            de Cuadros</a>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <title>Art-Vault</title>
</head>

<body>
    <div class="hero">
        <h1 class="text">Art-Vault</h1>
        <a href="{{ route('paintings.index') }}" class="btn btn-primary hidden" id="goToIndex">El arte</a>
    </div>
    <script src="{{ asset('js/welcome.js') }}"></script>
</body>

</html>

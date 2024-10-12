<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paintings</title>
</head>
<body>
    <h1>Listado de pinturas</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Piece of Art</th>
                <th>Painter</th>
                <th>Creation Date</th>
                <th>Art Movement</th>
                <th>Artistic Technique</th>
                <th>Size</th>
                <th>Museum</th>
                <th>Curiosity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paintings as $p)
                <tr>
                    <td>{{ $p->piece_of_art }}</td> 
                    <td>{{ $p->painter }}</td> 
                    <td>{{ $p->creation_date }}</td>
                    <td>{{ $p->art_movement }}</td>
                    <td>{{ $p->artistic_technique }}</td>
                    <td>{{ $p->size }}</td>
                    <td>{{ $p->museum }}</td>
                    <td>{{ $p->curiosity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

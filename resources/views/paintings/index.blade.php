<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pinturas</title>
</head>
<body>
    <h1>Listado de pinturas</h1>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-sm" href="{{ route('paintings.create') }}"> <i class="fa fa-plus"></i> Crear una Nueva Obra de Arte</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Obra de Arte</th>
                <th>Pintor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paintings as $p)
                <tr>
                    <td>{{ $p->piece_of_art }}</td> 
                    <td>{{ $p->painter }}</td> 
                    <td>
                        <form action="{{ route('paintings.destroy',$p->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('paintings.show',$p->id) }}"><i class="fa-solid fa-list"></i> Detalle</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('paintings.edit',$p->id) }}"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
       
                            @csrf
                            @method('DELETE')
          
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

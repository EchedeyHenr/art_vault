@extends('layout')

@section('content')
    <h1>Añade una nueva Obra de Arte</h1>
    <form method="POST" action="{{ route('paintings.update', $painting->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="piece_of_art">Obra de Arte</label>
            <input type="text" name="piece_of_art" value='{{ $painting->piece_of_art }}' class="form-control" id="piece_of_art" placeholder="Enter the piece of art">
        </div>
        <div class="form-group">
            <label for="painter">Pintor</label>
            <input type="text" name="painter" value='{{ $painting->painter }}' class="form-control" id="painter" placeholder="Enter the painter">
        </div>
        <div class="form-group">
            <label for="creation_date">Fecha de Creación</label>
            <input type="text" name="creation_date" value='{{ $painting->creation_date }}' class="form-control" id="creation_date" placeholder="Enter the creation date">
        </div>
        <div class="form-group">
            <label for="art_movement">Movimiento Artístico</label>
            <input type="text" name="art_movement" value='{{ $painting->art_movement }}' class="form-control" id="art_movement" placeholder="Enter the art movement">
        </div>
        <div class="form-group">
            <label for="artistic_technique">Técnica Artística</label>
            <input type="text" name="artistic_technique" value='{{ $painting->artistic_technique }}' class="form-control" id="artistic_technique" placeholder="Enter the artistic technique">
        </div>
        <div class="form-group">
            <label for="size">Tamaño</label>
            <input type="text" name="size" value='{{ $painting->size }}' class="form-control" id="size" placeholder="Enter the size">
        </div>
        <div class="form-group">
            <label for="museum">Museo</label>
            <input type="text" name="museum" value='{{ $painting->museum }}' class="form-control" id="museum" placeholder="Enter the museum">
        </div>
        <div class="form-group">
            <label for="curiosity">Dato Curioso</label>
            <textarea name="curiosity" class="form-control" id="curiosity" placeholder="Enter a curiosity about the painting" rows="4">{{ $painting->curiosity }}</textarea>
        </div>
        <div class="form-group">
            <label for="photo">Imagen Actual</label>
            @if ($painting->photo)
                <img src="{{ asset('storage/' . $painting->photo) }}" alt="Painting Photo" style="max-width: 200px; display: block; margin-bottom: 10px;">
            @endif
            <label for="photo">Imagen a Cambiar</label>
            <input type="file" name="photo" class="form-control" id="photo">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <a href="{{ route('paintings.index') }}">Volver a la Lista de Pinturas</a>
    
@endsection
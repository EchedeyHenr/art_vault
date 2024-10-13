@extends('layout')

@section('content')
    <h1>Create a New Painting</h1>
    <form method="POST" action="{{ route('paintings.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="piece_of_art">Piece of Art</label>
            <input type="text" name="piece_of_art" class="form-control" id="piece_of_art" placeholder="Enter the piece of art">
        </div>
        <div class="form-group">
            <label for="painter">Painter</label>
            <input type="text" name="painter" class="form-control" id="painter" placeholder="Enter the painter">
        </div>
        <div class="form-group">
            <label for="creation_date">Creation Date</label>
            <input type="text" name="creation_date" class="form-control" id="creation_date" placeholder="Enter the creation date">
        </div>
        <div class="form-group">
            <label for="art_movement">Art Movement</label>
            <input type="text" name="art_movement" class="form-control" id="art_movement" placeholder="Enter the art movement">
        </div>
        <div class="form-group">
            <label for="artistic_technique">Artistic Technique</label>
            <input type="text" name="artistic_technique" class="form-control" id="artistic_technique" placeholder="Enter the artistic technique">
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" name="size" class="form-control" id="size" placeholder="Enter the size">
        </div>
        <div class="form-group">
            <label for="museum">Museum</label>
            <input type="text" name="museum" class="form-control" id="museum" placeholder="Enter the museum">
        </div>
        <div class="form-group">
            <label for="curiosity">Curiosity</label>
            <textarea name="curiosity" class="form-control" id="curiosity" placeholder="Enter a curiosity about the painting" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="form-control" id="photo">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('paintings.index') }}">Back to the list</a>
    
@endsection

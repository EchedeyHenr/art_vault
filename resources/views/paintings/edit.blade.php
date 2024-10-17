@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
    <div class="paintings__container">
        <div class="paintings__side-images"></div>
        <div class="paintings__main-content paintings__main-content--create">
            <h2 class="paintings__title">Edite la Obra de Arte</h2>
            <form method="POST" action="{{ route('paintings.update', $painting->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="paintings__form-group">
                    <label for="piece_of_art" class="paintings__label">Obra de Arte</label>
                    <input type="text" name="piece_of_art" value='{{ old('piece_of_art', $painting->piece_of_art) }}'
                        class="paintings__input" id="piece_of_art" placeholder="Enter the piece of art">
                </div>
                <div class="paintings__form-group">
                    <label for="painter" class="paintings__label">Pintor</label>
                    <input type="text" name="painter" value='{{ old('piece_of_art', $painting->painter) }}'
                        class="paintings__input" id="painter" placeholder="Enter the painter">
                </div>
                <div class="paintings__form-group">
                    <label for="creation_date" class="paintings__label">Fecha de Creación</label>
                    <input type="text" name="creation_date" value='{{ old('piece_of_art', $painting->creation_date) }}'
                        class="paintings__input" id="creation_date" placeholder="Enter the creation date">
                </div>
                <div class="paintings__form-group">
                    <label for="art_movement" class="paintings__label">Movimiento Artístico</label>
                    <input type="text" name="art_movement" value='{{ old('piece_of_art', $painting->art_movement) }}'
                        class="paintings__input" id="art_movement" placeholder="Enter the art movement">
                </div>
                <div class="paintings__form-group">
                    <label for="artistic_technique" class="paintings__label">Técnica Artística</label>
                    <input type="text" name="artistic_technique"
                        value='{{ old('piece_of_art', $painting->artistic_technique) }}' class="paintings__input"
                        id="artistic_technique" placeholder="Enter the artistic technique">
                </div>
                <div class="paintings__form-group">
                    <label for="size" class="paintings__label">Tamaño</label>
                    <input type="text" name="size" value='{{ old('piece_of_art', $painting->size) }}'
                        class="paintings__input" id="size" placeholder="Enter the size">
                </div>
                <div class="paintings__form-group">
                    <label for="museum" class="paintings__label">Museo</label>
                    <input type="text" name="museum" value='{{ old('piece_of_art', $painting->museum) }}'
                        class="paintings__input" id="museum" placeholder="Enter the museum">
                </div>
                <div class="paintings__form-group">
                    <label for="curiosity" class="paintings__label">Dato Curioso</label>
                    <textarea name="curiosity" class="paintings__input paintings__input--curiosity" id="curiosity" placeholder="Enter a curiosity about the painting"
                        rows="4">{{ old('piece_of_art', $painting->curiosity) }}</textarea>
                </div>
                <div class="paintings__form-group">
                    <label for="photo" class="paintings__label">Obra de Arte Actual</label>
                    <div class="paintings__image">
                        @if ($painting->photo)
                            <img src="{{ asset('storage/' . $painting->photo) }}" class="paintings__img paintings__img--edit"
                                alt="Painting Photo">
                        @endif
                    </div>
                    <input type="file" name="photo" class="paintings__input paintings__file-input" id="photo">
                    <label for="photo" class="paintings__file-label">Subir Nueva Imagen</label>
                    <span class="paintings__file-name" id="file-name">Ningún archivo seleccionado</span>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="paintings__form-group paintings__form-group--button">
                    <button type="submit" class="paintings__button paintings__button--form">Update</button>
                </div>
            </form>
        </div>

        <div class="paintings__side-images"></div>
    </div>
    </div>
    <script src="{{ asset('js/create.js') }}"></script>
@endsection

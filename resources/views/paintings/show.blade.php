@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
    <div class="paintings__container">
        <div class="paintings__side-images"></div>
        <div class="paintings__main-content paintings__main-content--show">
            <h2 class="paintings__title">Detalle de pintura</h2>
            <div class="card-body">
                <div class="paintings__form-group">
                    <strong>Obra de Arte:</strong><br />
                    @if ($painting->photo)
                        <img src="{{ asset('storage/' . $painting->photo) }}" alt="Image of {{ $painting->piece_of_art }}"
                            style="max-width: 200px;">
                    @else
                        <p>Imagen no disponible</p>
                    @endif
                </div>

                <div class="paintings__form-group">
                    <strong>Título de la Pieza de Arte:</strong><br />
                    {{ $painting->piece_of_art }}
                </div>

                <div class="paintings__form-group">
                    <strong>Pintor:</strong><br />
                    {{ $painting->painter }}
                </div>

                <div class="paintings__form-group">
                    <strong>Año de Creación:</strong><br />
                    {{ $painting->creation_date }}
                </div>

                <div class="paintings__form-group">
                    <strong>Movimiento Artístico:</strong><br />
                    {{ $painting->art_movement }}
                </div>

                <div class="paintings__form-group">
                    <strong>Técnica Artística utilizada:</strong><br />
                    {{ $painting->artistic_technique }}
                </div>

                <div class="paintings__form-group">
                    <strong>Tamaño:</strong><br />
                    {{ $painting->size }}
                </div>

                <div class="paintings__form-group">
                    <strong>Museo:</strong><br />
                    {{ $painting->museum }}
                </div>

                <div class="paintings__form-group">
                    <strong>Dato Curioso:</strong><br />
                    {{ $painting->curiosity }}
                </div>
            </div>
        </div>
        <div class="paintings__side-images"></div>
    </div>
    <script src="{{ asset('js/show.js') }}"></script>
@endsection

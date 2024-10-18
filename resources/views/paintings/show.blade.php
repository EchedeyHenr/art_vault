@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
    <div class="paintings__container">
        <div class="paintings__side-images"></div>
        <div class="paintings__main-content paintings__main-content--show">
            <h2 class="paintings__title">Detalle de pintura</h2>
            <div class="paintings__card-body"> {{-- MIRAR ESTA CLASS --}}
                <ul class="paintings__details-list">
                    <li class="paintings__detail">
                        <strong>Obra de Arte:</strong>
                        @if ($painting->photo)
                            <img src="{{ asset('storage/' . $painting->photo) }}"
                                alt="Image of {{ $painting->piece_of_art }}" class="paintings__image">
                        @else
                            <p class="paintings__no-image">Imagen no disponible</p>
                        @endif
                    </li>

                    <li class="paintings__detail">
                        <strong>Título de la Pieza de Arte:</strong>
                        {{ $painting->piece_of_art }}
                    </li>

                    <li class="paintings__detail">
                        <strong>Pintor:</strong>
                        {{ $painting->painter }}
                    </li>

                    <li class="paintings__detail">
                        <strong>Año de Creación:</strong>
                        {{ $painting->creation_date }}
                    </li>

                    <li class="paintings__detail">
                        <strong>Movimiento Artístico:</strong>
                        {{ $painting->art_movement }}
                    </li>

                    <li class="paintings__detail">
                        <strong>Técnica Artística utilizada:</strong>
                        {{ $painting->artistic_technique }}
                    </li>

                    <li class="paintings__detail">
                        <strong>Tamaño:</strong>
                        {{ $painting->size }}
                    </li>

                    <li class="paintings__detail">
                        <strong>Museo:</strong>
                        {{ $painting->museum }}
                    </li>

                    <li class="paintings__detail">
                        <strong>Dato Curioso:</strong>
                        {{ $painting->curiosity }}
                    </li>
                </ul>
            </div>
        </div>
        <div class="paintings__side-images"></div>
    </div>
    <script src="{{ asset('js/column.js') }}"></script>
@endsection
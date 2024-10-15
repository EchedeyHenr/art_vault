@extends('layout')

@section('content')

<div class="card mt-5">
    <h1>Detalle de pintura </h1>
    <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('paintings.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Obra de Arte:</strong> <br/>
                    @if ($painting->photo)
                        <img src="{{ asset('storage/' . $painting->photo) }}" alt="Image of {{ $painting->piece_of_art }}" style="max-width: 200px;">
                    @else
                        <p>Imagen no disponible</p>
                    @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Título de la Pieza de Arte:</strong> <br/>
                {{ $painting->piece_of_art}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Pintor:</strong> <br/>
                {{ $painting->painter }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Año de Creación:</strong> <br/>
                {{ $painting->creation_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Movimiento Artístico:</strong> <br/>
                {{ $painting->art_movement }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Técnica Artística utilizada:</strong> <br/>
                {{ $painting->artistic_technique }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Tamaño:</strong> <br/>
                {{ $painting->size }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Museo:</strong> <br/>
                {{ $painting->museum }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Dato Curioso:</strong> <br/>
                {{ $painting->curiosity }}
            </div>
        </div>
    </div>
  
    </div>
  </div>
    
@endsection
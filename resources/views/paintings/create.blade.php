@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
    <div class="paintings__container">
        <div class="paintings__side-images"></div>
        <div class="paintings__main-content paintings__main-content--create">
        <h2 class="paintings__title">Añade una Nueva Obra de Arte</h2>
        <p class="paintings__text">
            La creación de una obra de arte es un viaje fascinante que trasciende lo físico y lo material. Es un acto de valentía, donde la imaginación se encuentra con la realidad. Cada trazo de pincel, cada nota musical, cada palabra escrita, lleva consigo la esencia del artista: sus emociones, sus sueños y sus luchas.
          </p>
          <p class="paintings__text">
            Crear arte es abrir una ventana a nuestro interior, un espacio donde lo inefable se transforma en algo tangible. En cada creación, dejamos una parte de nosotros mismos, un legado que invita a otros a sentir, a reflexionar y a conectar. El arte no solo embellece el mundo; también nos desafía a ver la vida desde diferentes perspectivas.
          </p>
          <p class="paintings__text">
            A través de la creación, encontramos la libertad de expresarnos sin límites, de explorar lo desconocido y de desafiar las convenciones. Es un proceso de descubrimiento, donde los errores se convierten en lecciones y la imperfección se celebra como parte de la belleza.
          </p>
          <p class="paintings__text paintings__text--last">
            Así que, al crear, recuerda que estás tejiendo un hilo en el vasto tapiz de la humanidad. Cada obra es un reflejo de la luz y la sombra que llevamos dentro, una invitación a otros a unirse a tu viaje. ¡Deja que tu creatividad fluya y transforma tus visiones en realidad!
        </p>
        <form method="POST" action="{{ route('paintings.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="paintings__form-group">
                <label for="piece_of_art" class="paintings__label">Obra de Arte</label>
                <input type="text" name="piece_of_art" class="paintings__input" id="piece_of_art" placeholder="Introduzca la obra de arte">
            </div>
            <div class="paintings__form-group">
                <label for="painter" class="paintings__label">Artista</label>
                <input type="text" name="painter" class="paintings__input" id="painter" placeholder="Introduzca el artista">
            </div>
            <div class="paintings__form-group">
                <label for="creation_date" class="paintings__label">Año de Creación</label>
                <input type="text" name="creation_date" class="paintings__input" id="creation_date" placeholder="Introduzca el año de creación">
            </div>
            <div class="paintings__form-group">
                <label for="art_movement" class="paintings__label">Movimiento Artístico</label>
                <input type="text" name="art_movement" class="paintings__input" id="art_movement" placeholder="Introduzca el movimiento artístico">
            </div>
            <div class="paintings__form-group">
                <label for="artistic_technique" class="paintings__label">Técnica Artística</label>
                <input type="text" name="artistic_technique" class="paintings__input" id="artistic_technique" placeholder="Introduzca la técnica artística utilizada">
            </div>
            <div class="paintings__form-group">
                <label for="size" class="paintings__label">Tamaño</label>
                <input type="text" name="size" class="paintings__input" id="size" placeholder="Introduzca el tamaño">
            </div>
            <div class="paintings__form-group">
                <label for="museum" class="paintings__label">Museo</label>
                <input type="text" name="museum" class="paintings__input" id="museum" placeholder="Introduzca el museo">
            </div>
            <div class="paintings__form-group">
                <label for="curiosity" class="paintings__label">Curiosidad</label>
                <textarea name="curiosity" class="paintings__input paintings__input--curiosity" id="curiosity" placeholder="Introduzca alguna curiosidad sobre la obra/artista" rows="4"></textarea>
            </div>
            <div class="paintings__form-group">
                <label for="photo" class="paintings__label">Imagen de la Obra de Arte</label>
                <input type="file" name="photo" class="paintings__input paintings__file-input" id="photo">
                <label for="photo" class="paintings__file-label">Subir Foto</label>
                <span class="paintings__file-name" id="file-name">Ningún archivo seleccionado</span>
            </div>
            <div class="paintings__form-group paintings__form-group--button">
                <button type="submit" class="paintings__button paintings__button--form">Añadir</button>
            </div>
        </form>
    </div>
    <div class="paintings__side-images"></div>
    </div>
    <script src="{{ asset('js/create.js') }}"></script>
@endsection

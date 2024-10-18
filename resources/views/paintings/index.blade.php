@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="paintings__container">
        <div class="paintings__side-images"></div>
        <div class="paintings__main-content">
            <h2 class="paintings__title">Listado de pinturas</h2>
            <p class="paintings__text">
                El arte es la expresión más pura de la creatividad humana. Es el lenguaje sin palabras que nos conecta, nos
                mueve y nos transforma. A través de cada pincelada, cada nota, cada verso, el arte nos invita a ver el mundo
                desde una nueva perspectiva. Nos recuerda que la belleza puede encontrarse en lo cotidiano y que nuestras
                emociones más profundas pueden cobrar vida en formas inesperadas.
            </p>

            <p class="paintings__text">
                El arte no solo refleja la realidad; la moldea. Nos desafía a soñar, a cuestionar y a descubrir. En cada
                obra, encontramos un fragmento del alma del artista, una invitación a compartir su visión y su historia.
            </p>

            <p class="paintings__text paintings__text--last">
                Así que, cuando te sientas perdido, vuelve al arte. Permítete ser tocado por su magia, y recuerda que, como
                creadores y espectadores, todos llevamos un artista dentro de nosotros.
            </p>



            <table class="paintings__table">
                <thead class="paintings__table-head">
                    <tr class="paintings__table-row">
                        <th class="paintings__table-header">Obra de Arte</th>
                        <th class="paintings__table-header">Pintor</th>
                        <th class="paintings__table-header">Acciones</th>
                    </tr>
                </thead>
                <tbody class="paintings__table-body">
                    @foreach ($paintings as $p)
                        <tr class="paintings__table-row">
                            <td class="paintings__table-cell">{{ $p->piece_of_art }}</td>
                            <td class="paintings__table-cell">{{ $p->painter }}</td>
                            <td class="paintings__table-cell paintings__table-cell--actions">
                                <form action="{{ route('paintings.destroy', $p->id) }}" method="POST"
                                    class="paintings__form">
                                    <a class="button button--info" href="{{ route('paintings.show', $p->id) }}">Detalle</a>
                                    <a class="button button--primary"
                                        href="{{ route('paintings.edit', $p->id) }}">Editar</a>
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="button button--danger">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="paintings__text paintings__text--botom">
                El botón de eliminar es intencionalmente más pequeño que los otros, recordándonos que el arte es un tesoro
                que nunca debería ser borrado, solo apreciado y celebrado.
            </p>
        </div>
        <div class="paintings__side-images">
        </div>
    </div>
    <script src="{{ asset('js/column.js') }}"></script>
@endsection

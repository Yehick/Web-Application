@extends('layouts.app')
@section('title', 'Funciones')
@section('content')

    <div class="container">

        <div class="row">
            <div class="col-2 text-center">
                <a href="{{ route('filmes.create') }}">
                    <button class="btn btn-primary">Agregar</button>
                </a>
                <a href="/filmesxml" class="btn btn-danger">XML</a>
            </div>
            <div class="col-4 text-center">
                <h1>Funciones</h1>
            </div>
            <h1>
                Exportar →
            </h1>
            <div class="justify-content-lg-center" class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ route('filmes.pdf') }}" class="btn btn-info">PDF</a>
                <a href="/filmesxml" class="btn btn-danger">XML</a>
                <a href="/filmesCSV" class="btn btn-secondary">CSV</a>
                <a href="/filmesXLSX" class="btn btn-warning">XLSX</a>
                <a href="{{ route('filmes.grafica') }}" class="btn btn-primary">GRAFICAR</a>
            </div>
        </div>

        @forelse($filmes as $filme)
            <div class="row">
                <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div class="card col-sm bg-info" style="width: 18rem;">
                            <img class="bg-light shadow-sm mx-auto"
                                 style="width: 80%; height: 200px; border-radius: 50px 50px 0 0;" src="..." alt="">
                            <div class="card-body ">
                                <h5 class="card-title col-sm bg-info text-white">Comienza: {{ $filme->start }} hrs</h5>
                                <h3 class="card-text col-sm bg-info text-white">Finaliza: {{ $filme->end }} hrs</h3>
                                <p class="card-text col-sm bg-info text-white">
                                    Disponibilidad: {{ $filme->available }}</p>
                                <p class="card-text col-sm bg-info text-white">Turno durante el
                                    día: {{ $filme->type }}</p>
                                <form action="{{ route('filmes.destroy', $filme->id) }}" method="post">
                                    <a class="btn btn-secondary col-sm bg-info text-white"
                                       href="{{ route('filmes.show', $filme->id) }}">Ver</a>
                                    <a class="btn btn-secondary col-sm bg-info text-white"
                                       href="{{ route('filmes.edit', $filme->id) }}">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger col-sm">Eliminar</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>


                <br>
                @empty
                    <div><h3>NO HAY REGISTROS DE FUNCIONES EN LA BASE DE DATOS</h3></div>
                @endforelse

                {{ $filmes->links() }}

                @endsection

            </div>
    </div>


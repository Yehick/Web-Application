@extends('layouts.app')
@section('title', 'Salas')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-2 text-center">
                <a href="{{ route('rooms.create') }}">
                    <button class="btn btn-primary">Agregar</button>
                </a>
                <a href="/consumablsxml" class="btn btn-danger">XML</a>
            </div>
            <div class="col-4"><h1>Salas registradas</h1>
            </div>

            <h1>
                Exportar a: →
            </h1>

            <div class="justify-content-lg-center" class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ route('rooms.pdf') }}" class="btn btn-info">PDF</a>
                <a href="/roomsxml" class="btn btn-danger">XML</a>
                <a href="/roomsCSV" class="btn btn-secondary">CSV</a>
                <a href="/roomsXLSX" class="btn btn-warning">XLSX</a>
                <a href="{{ route('rooms.grafica') }}" class="btn btn-primary">GRAFICAR</a>
            </div>
        </div>
        @forelse($rooms as $room)
            <div class="row">
                <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div class="card col-sm bg-info" style="width: 18rem;">
                            <img class="bg-light shadow-sm mx-auto"
                                 style="width: 80%; height: 200px; border-radius: 50px 50px 0 0;" src="..." alt="">
                            <div class="card-body ">
                                <h5 class="card-title col-sm bg-info text-white">Asiento: {{ $room->chairs }}</h5>
                                <h5 class="card-text col-sm bg-info text-white">Ubicación: {{ $room->location }}</h5>
                                <h5 class="card-text col-sm bg-info text-white">Capacidad: {{ $room->capacity }}</h5>
                                <form action="{{ route('rooms.destroy', $room->id) }}" method="post">
                                    <a class="btn btn-secondary col-sm bg-info text-white"
                                       href="{{ route('rooms.show', $room->id) }}">Ver</a>
                                    <a class="btn btn-secondary col-sm bg-info text-white"
                                       href="{{ route('rooms.edit', $room->id) }}">Editar</a>
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
                    <div><h1>No hay salas disponibles en este momento</h1></div>
                @endforelse

                {{ $rooms->links() }}

                @endsection

            </div>
    </div>


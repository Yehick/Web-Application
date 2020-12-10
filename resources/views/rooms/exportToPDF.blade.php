@extends('layout.layout')

@section('content')
    <div>
        <h1>Lista de salas registradas</h1>
    </div>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>ASIENTOS</th>
            <th>UBICACIÓN</th>
            <th>CAPACIDAD</th>
        </tr>
        </thead>
        @foreach($rooms as $room)
            <tbody>
            <tr>
                <th>{{$room->id}}</th>
                <th>{{$room->chairs}}</th>
                <th>{{$room->location}}</th>
                <th>{{$room->capacity}}</th>
            </tr>
            </tbody>
        @endforeach
    </table>


@endsection

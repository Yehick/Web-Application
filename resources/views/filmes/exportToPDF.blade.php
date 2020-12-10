@extends('layout.layout')

@section('content')
    <div>
        <h1>Lista de funciones registradas</h1>
    </div>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>COMIENZO</th>
            <th>FINALIZACIÓN</th>
            <th>DISPONIBILIDAD</th>
            <th>TURNO</th>
        </tr>
        </thead>
        @foreach($filmes as $filme)
            <tbody>
            <tr>
                <th>{{$filme->id}}</th>
                <th>{{$filme->start}}</th>
                <th>{{$filme->end}}</th>
                <th>{{$filme->available}}</th>
                <th>{{$filme->type}}</th>
            </tr>
            </tbody>
        @endforeach
    </table>


@endsection

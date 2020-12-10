@extends('layout.layout')

@section('content')
    <div>
        <h1>Lista de películas registradas</h1>
    </div>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>SINÓPSIS</th>
            <th>CATEGORÍA</th>
            <th>DIRECTOR</th>
            <th>DURACIÓN</th>
            <th>ACTOR</th>
            <th>GÉNERO</th>
        </tr>
        </thead>
        @foreach($movies as $movie)
            <tbody>
            <tr>
                <th>{{$movie->id}}</th>
                <th>{{$movie->name}}</th>
                <th>{{$movie->synopsis}}</th>
                <th>{{$movie->category}}</th>
                <th>{{$movie->director}}</th>
                <th>{{$movie->duration}}</th>
                <th>{{$movie->actors}}</th>
                <th>{{$movie->genre}}</th>
            </tr>
            </tbody>
        @endforeach
    </table>


@endsection


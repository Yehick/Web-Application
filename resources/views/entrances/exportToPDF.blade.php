@extends('layout.layout')

@section('content')
    <div>
        <h1>Lista de entradas registradas</h1>
    </div>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>PRECIO</th>
            <th>HORA DE ENTRADA</th>
        </tr>
        </thead>
        @foreach($entrances as $entrance)
            <tbody>
            <tr>
                <th>{{$entrance->id}}</th>
                <th>{{$entrance->price}}</th>
                <th>{{$entrance->hourEntrance}}</th>
            </tr>
            </tbody>
        @endforeach
    </table>


@endsection

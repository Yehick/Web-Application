@extends('layout.layout')

@section('content')
    <div>
        <h1>Registro de consumibles</h1>
    </div>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>ARTÍCULO</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
        </tr>
        </thead>
        @foreach($consumabls as $consumabl)
            <tbody>
            <tr>
                <th>{{$consumabl->id}}</th>
                <th>{{$consumabl->name}}</th>
                <th>{{$consumabl->price}}</th>
                <th>{{$consumabl->quantity}}</th>
            </tr>
            </tbody>
        @endforeach
    </table>


@endsection

@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-3 text-center">
            <a href="{{ route('consumabls.create') }}">
                <button class="btn btn-primary bg-info text-white">Agregar</button>
            </a>
            <a href="/consumablsxml" class="btn btn-danger">XML</a>
        </div>

        <div class="col-4 text-center">
            <h1>Consumibles</h1>
        </div>

        <h1>
            Exportar a: →
        </h1>

        <div class="justify-content-lg-center" class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('consumabls.pdf') }}" class="btn btn-info">PDF</a>
            <a href="/consumablsxml" class="btn btn-danger">XML</a>
            <a href="/consumablsCSV" class="btn btn-secondary">CSV</a>
            <a href="/consumablsXLSX" class="btn btn-warning">XLSX</a>
            <a href="{{ route('consumabls.grafica') }}" class="btn btn-primary">GRAFICAR</a>
        </div>
    </div>
    <br>
    <table class="table table-responsive-md">

        <thead>
        <th>ID</th>
        <th>Artículo</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Acciones</th>
        </thead>
        <tbody>
        @forelse ($consumabls as $consumabl)
            <tr>
                <td>{{ $consumabl->id }}</td>
                <td>{{ $consumabl->name}}</td>
                <td>$ {{ $consumabl->price}}</td>
                <td>{{ $consumabl->quantity}} productos</td>
                <td>
                    <form action="{{ route('consumabls.destroy', $consumabl->id) }}" method="post">
                        <a href="{{ route('consumabls.show', $consumabl->id) }}">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                                <path fill-rule="evenodd"
                                      d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                        </a>
                        <a href="{{ route('consumabls.edit', $consumabl->id) }}">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd"
                                      d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <div class="text-center">
                <p>No hay datos </p>
                <a href="{{ route('consumabls.create') }}">
                    <button class="btn btn-primary bg-info text-white">Agregar</button>
                </a>
            </div>
        @endforelse
        </tbody>
    </table>
@endsection


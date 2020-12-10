<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);


Route:: resources(
    [
        'movies'     => 'MovieController',
        'consumabls' => 'ConsumablController',
        'entrances'  => 'EntranceController',
        'filmes'     => 'FilmeController',
        'rooms'      => 'RoomController'

    ]
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('movies', 'MovieController');
Route::get('/movies.viewTable', 'MovieController@viewTable');
//Route::resource('consumabls','ConsumablController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// FUNCION DE CONVERTIR DATOS A XML

Route::get(
    'consumablsxml',
    function () {
        $consumabls = App\Consumabl::all();
        return response()->xml(['consumabls' => $consumabls->toArray()]);
    }
);

Route::get(
    'entrancesxml',
    function () {
        $entrances = App\Entrance::all();
        return response()->xml(['entrances' => $entrances->toArray()]);
    }
);

Route::get(
    'filmesxml',
    function () {
        $filmes = App\Filme::all();
        return response()->xml(['filmes' => $filmes->toArray()]);
    }
);

Route::get(
    'moviesxml',
    function () {
        $movies = App\Movie::all();
        return response()->xml(['movies' => $movies->toArray()]);
    }
);

Route::get(
    'roomsxml',
    function () {
        $rooms = App\Room::all();
        return response()->xml(['rooms' => $rooms->toArray()]);
    }
);


//FUNCION DE EXPORTAR A PDF
Route::get('consumabls-pdf', 'ConsumablController@exportToPDF')->name('consumabls.pdf');
Route::get('entrances-pdf', 'EntranceController@exportToPDF')->name('entrances.pdf');
Route::get('filmes-pdf', 'FilmeController@exportToPDF')->name('filmes.pdf');
Route::get('movies-pdf', 'MovieController@exportToPDF')->name('movies.pdf');
Route::get('rooms-pdf', 'RoomController@exportToPDF')->name('rooms.pdf');

//FUNCION DE EXPORTAR A XLSX
Route::get('/consumablsXLSX', 'ConsumablController@exportToXLSX');
Route::get('/entrancesXLSX', 'EntranceController@exportToXLSX');
Route::get('/filmesXLSX', 'FilmeController@exportToXLSX');
Route::get('/moviesXLSX', 'MovieController@exportToXLSX');
Route::get('/roomsXLSX', 'RoomController@exportToXLSX');

//FUNCION DE EXPORTAR A CSV
Route::get('/consumablsCSV', 'ConsumablController@exportToCSV');
Route::get('/entrancesCSV', 'EntranceController@exportToCSV');
Route::get('/filmesCSV', 'FilmeController@exportToCSV');
Route::get('/moviesCSV', 'MovieController@exportToCSV');
Route::get('/roomsCSV', 'RoomController@exportToCSV');

//FUNCION DE GRAFICAR
Route::get('graficas.graficarConsumibles', 'GraficasController@graficarConsumibles')->name('consumabls.grafica');
Route::get('graficas.graficarEntradas', 'GraficasController@graficarEntradas')->name('entrances.grafica');
Route::get('graficas.graficarFunciones', 'GraficasController@graficarFunciones')->name('filmes.grafica');
Route::get('graficas.graficarPeliculas', 'GraficasController@graficarPeliculas')->name('movies.grafica');
Route::get('graficas.graficarSalas', 'GraficasController@graficarSalas')->name('rooms.grafica');
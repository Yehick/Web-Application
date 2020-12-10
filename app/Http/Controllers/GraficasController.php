<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consumabl;
use App\Entrance;
use App\Filme;
use App\Movie;
use App\Room;

class GraficasController extends Controller
{
    public function graficarConsumibles()
    {
        $consumabls = Consumabl::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarConsumibles', compact('consumabls'));
    }

    public function graficarEntradas()
    {
        $entrances = Entrance::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarEntradas', compact('entrances'));
    }

    public function graficarFunciones()
    {
        $filmes = Filme::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarFunciones', compact('filmes'));
    }

    public function graficarPeliculas()
    {
        $movies = Movie::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarPeliculas', compact('movies'));
    }

    public function graficarSalas()
    {
        $rooms = Room::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarSalas', compact('rooms'));
    }

}

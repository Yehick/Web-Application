<?php

namespace App\Exports;

use App\Filme;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class FilmesExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $filmes = DB::table('filmes')->select('id', 'start', 'end', 'available', 'type')->get();
        return $filmes;
    }

    public function headings(): array
    {
        return [
            'ID',
            'COMIENZO',
            'FINALIZACIÓN',
            'DISPONIBILIDAD',
            'TIPO'
        ];
    }
}

<?php

namespace App\Exports;

use App\Consumabl;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class ConsumablsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $consumabls = DB::table('consumabls')->select('id', 'name', 'price', 'quantity')->get();
        return $consumabls;
    }

    public function headings(): array
    {
        return [
            'ID',
            'ARTÍCULO',
            'PRECIO',
            'CANTIDAD'
        ];
    }
}

<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SallesExport implements FromCollection,WithHeadings
{
    protected $id;

    public function headings(): array
    {
        return [
            'number',
            'name'
        ];
    }

    function __construct($id)
    {
        $this->id = $id;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('salles')
            ->select('salles.number', 'materiels.description')
            ->join('materiel_salles', 'salles.id', '=', 'materiel_salles.salle_id')
            ->join('materiels', 'materiel_salles.materiel_id', '=', 'materiels.id')
            ->where('salles.id', '=', $this->id)
            ->get();
    }
}

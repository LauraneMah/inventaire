<?php

namespace App\Exports;

use App\Models\MaterielSalle;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class MaterielSallesExport implements FromCollection
{

    public function headings():array
    {
        return [
            'id',
            'material_id',
            'salle_id'
        ];
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $test = DB::table('materiel_salles')
            ->select('salles.number', 'materiels.description')
            ->join('materiels', 'materiel_salles.materiel_id', '=', 'materiels.id')
            ->join('salles', 'materiel_salles.salle_id', '=', 'salles.id')
            ->get();


        return $test;
        //return MaterielSalle::all();
    }
}

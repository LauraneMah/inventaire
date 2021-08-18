<?php

namespace App\Exports;

use App\Models\MaterielSalle;
use Maatwebsite\Excel\Concerns\FromCollection;

class MaterielSallesExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return MaterielSalle::all();
    }
}

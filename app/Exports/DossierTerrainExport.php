<?php

namespace App\Exports;

use App\Models\DossierTerrain;
use Maatwebsite\Excel\Concerns\FromCollection;

class DossierTerrainExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DossierTerrain::all();
    }
}
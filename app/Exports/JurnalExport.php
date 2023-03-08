<?php

namespace App\Exports;

use App\Models\jurnalekstra;
use Maatwebsite\Excel\Concerns\FromCollection;

class JurnalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return jurnalekstra::all();
    }
}

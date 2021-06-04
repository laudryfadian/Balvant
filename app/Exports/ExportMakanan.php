<?php

namespace App\Exports;

use App\Makanan;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportMakanan implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Makanan::all();
    }
}

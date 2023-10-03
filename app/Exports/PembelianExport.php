<?php

namespace App\Exports;
use App\Models\Pembelian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PaketExport;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class PembelianExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pembelian::all();
    }
}

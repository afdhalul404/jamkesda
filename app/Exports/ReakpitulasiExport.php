<?php

namespace App\Exports;



use App\Models\Rekapitulasi;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReakpitulasiExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return (Rekapitulasi::select('no_kartu', 'nik', 'npp', 'nama', 'hub_keluarga', 'faskes', 'status_peserta', 'alamat', 'kelurahan', 'kecamatan', 'kota')->get());
    }
}

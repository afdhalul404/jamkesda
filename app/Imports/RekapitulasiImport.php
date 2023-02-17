<?php

namespace App\Imports;

use App\Models\Rekapitulasi;
use Maatwebsite\Excel\Concerns\ToModel;

class RekapitulasiImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Rekapitulasi([
            'no_kartu'     => $row[0],
            'nik'    => $row[1],
            'npp' => $row[2],
            'nama' => $row[3],
            'hub_keluarga' => $row[4],
            'faskes' => $row[5],
            'status_peserta' => $row[6],
            'alamat' => $row[7],
            'kelurahan' => $row[8],
            'kecamatan' => $row[9],
            'kota' => $row[10],

        ]);
    }
}

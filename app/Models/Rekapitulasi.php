<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekapitulasi extends Model
{
    use HasFactory;
    protected $fillable = ['no_kartu', 'nik', 'npp', 'nama', 'hub_keluarga', 'faskes', 'status_peserta', 'alamat', 'kelurahan', 'kecamatan', 'kota'];
    protected $table = 'rekapitulasi';
    public $timestamps = false;

}

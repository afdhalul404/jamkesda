<?php

namespace App\Http\Controllers;

use App\Models\Rekapitulasi;
use Illuminate\Http\Request;
use App\Exports\ReakpitulasiExport;
use App\Imports\RekapitulasiImport;
use Maatwebsite\Excel\Facades\Excel;


class RekapitulasiController extends Controller
{
    public function index()
    {
        $rekapitulasi = Rekapitulasi::all();
        return view('index', ['rekapitulasi' => $rekapitulasi]);
    }

    public function show($id)
    {
        $rekapitulasi = Rekapitulasi::findOrFail($id);
        return view('detail', ['rekapitulasi' => $rekapitulasi]);
    }

    public function store(Request $request)
    {
        $rekapitulasi = new Rekapitulasi();
        $rekapitulasi->no_kartu = $request->no_kartu;
        $rekapitulasi->nik = $request->nik;
        $rekapitulasi->npp = $request->npp;
        $rekapitulasi->nama = $request->nama;
        $rekapitulasi->hub_keluarga = $request->hub_keluarga;
        $rekapitulasi->faskes = $request->faskes;
        $rekapitulasi->status_peserta = $request->status_peserta;
        $rekapitulasi->alamat = $request->alamat;
        $rekapitulasi->kelurahan = $request->kelurahan;
        $rekapitulasi->kecamatan = $request->kecamatan;
        $rekapitulasi->kota = $request->kota;
        $rekapitulasi->save();
        return redirect('/')->with('status', 'Tambah data berhasil');
    }

    public function update(Request $request, $id)
    {
        $rekapitulasi = Rekapitulasi::findOrFail($id);
        $rekapitulasi->no_kartu = $request->no_kartu;
        $rekapitulasi->nik = $request->nik;
        $rekapitulasi->npp = $request->npp;
        $rekapitulasi->nama = $request->nama;
        $rekapitulasi->hub_keluarga = $request->hub_keluarga;
        $rekapitulasi->faskes = $request->faskes;
        $rekapitulasi->status_peserta = $request->status_peserta;
        $rekapitulasi->alamat = $request->alamat;
        $rekapitulasi->kelurahan = $request->kelurahan;
        $rekapitulasi->kecamatan = $request->kecamatan;
        $rekapitulasi->kota = $request->kota;
        $rekapitulasi->save();
        return redirect('/')->with('status', 'Update data berhasil');
    }

    public function destroy($id)
    {
        $rekapitulasi = Rekapitulasi::findOrFail($id);
        $rekapitulasi->delete();

        return redirect('/')->with('status', 'Hapus data berhasil');
    }

    public function export()
    {
        return Excel::download(new ReakpitulasiExport, 'Rekapitulasi.xlsx');
    }

    public function import(Request $request)
    {
        Excel::import(new RekapitulasiImport,$request->file('import'));

        return redirect('/')->with('status', 'Import data berhasil');;
    }
}

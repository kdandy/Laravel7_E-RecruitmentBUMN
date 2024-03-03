<?php

namespace App\Http\Controllers;

use App\Hasil_akhir;
use App\Lowongan;
use App\Peserta;
use App\Uji_wawancara;
use Illuminate\Http\Request;

class hasilAkhirController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::latest()->get();
        return view('admin.hasilAkhir.index', compact('lowongan'));
    }

    public function store(Request $req)
    {
        $data = new Hasil_akhir;
        $data->peserta_id = $req->peserta_id;
        $data->lowongan_id = $req->lowongan_id;
        $data->save();

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function edit($uuid)
    {
        return view('admin.hasilAkhir.edit');
    }

    public function update(Request $req, $uuid)
    {

        return redirect()->route('hasilAkhirIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Hasil_akhir::where('uuid', $uuid)->first()->delete();
        return back();

    }

    public function show($uuid)
    {
        $lowongan = Lowongan::where('uuid', $uuid)->first();
        $uji_wawancara = Uji_wawancara::where('lowongan_id',$lowongan->id)->first();
        $hasil_akhir = Hasil_akhir::where('lowongan_id', $lowongan->id)->get()->sortByDesc(function ($query) {
            return $query->peserta->uji_wawancara_peserta->nilai;
        })->all();
        $peserta_id = Hasil_akhir::pluck('peserta_id')->all();

        $data = $uji_wawancara->uji_wawancara_peserta->where('status', 1)->whereNotIn('peserta_id', $peserta_id);
        return view('admin.hasilAkhir.show', compact('lowongan', 'data', 'hasil_akhir'));
    }

    public function pesertaStore(Request $req)
    {

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function rincianEdit($uuid)
    {

        return view('admin.hasilAkhir.rincianEdit');
    }

    public function rincianUpdate(Request $req, $uuid)
    {

        return redirect()->route('hasilAkhirShow', ['uuid' => 'qqabxjb'])->withSuccess('Data berhasil diubah');
    }

    public function rincianDestroy($uuid)
    {
        return back();

    }

}

<?php

namespace App\Http\Controllers;

use App\Lowongan;
use App\Peserta;
use App\Uji_wawancara;
use App\Uji_wawancara_peserta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Mail\HasilUjiWawancara;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class ujiWawancaraController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->format('Ymd');
        $lowongan = Lowongan::latest()->get();
        $data = Uji_wawancara::latest()->get();
        return view('admin.ujiWawancara.index', compact('lowongan', 'now', 'data'));
    }

    public function store(Request $req)
    {
        $data = Uji_wawancara::create($req->all());

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function edit($uuid)
    {
        $data = Uji_wawancara::where('uuid', $uuid)->first();
        $lowongan = Lowongan::latest()->get();

        return view('admin.ujiWawancara.edit', compact('data', 'lowongan'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Uji_wawancara::where('uuid', $uuid)->first();

        $data->fill($req->all())->save();

        return redirect()->route('ujiWawancaraIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Uji_wawancara::where('uuid', $uuid)->first()->delete();

        return back();

    }

    public function show($uuid)
    {
        $ujiWawancara = Uji_wawancara::where('uuid', $uuid)->first();
        $data = Uji_wawancara_peserta::where('uji_wawancara_id', $ujiWawancara->id)->latest()->get();
        $peserta = Peserta::where('lowongan_id', $ujiWawancara->lowongan_id)->whereHas('uji_kesehatan_peserta', function ($query) {
            $query->where('status', 1);
        })->with('uji_kesehatan_peserta')->get();
        return view('admin.ujiWawancara.show', compact('data', 'peserta', 'ujiWawancara'));
    }

    public function pesertaStore(Request $req)
    {
        $data = Uji_wawancara_peserta::create($req->all());
        Mail::to($data->peserta->email)->send(new HasilUjiWawancara($data));

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function rincianEdit($uuid)
    {
        $data = Uji_wawancara_peserta::where('uuid', $uuid)->first();
        $peserta = Peserta::whereHas('uji_kesehatan_peserta', function ($query) {
            $query->where('status', 1);
        })->with('uji_kesehatan_peserta')->get();

        return view('admin.ujiWawancara.rincianEdit', compact('data', 'peserta'));
    }

    public function rincianUpdate(Request $req, $uuid)
    {
        $data = Uji_wawancara_peserta::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();
        Mail::to($data->peserta->email)->send(new HasilUjiWawancara($data));
        return redirect()->route('ujiWawancaraShow', ['uuid' => $data->uji_wawancara->uuid])->withSuccess('Data berhasil diubah');
    }

    public function rincianDestroy($uuid)
    {
        $data = Uji_wawancara_peserta::where('uuid', $uuid)->first()->delete();

        return back();

    }

    public function filter($uuid)
    {
        $ujiWawancara = Uji_wawancara::where('uuid', $uuid)->first();
        return view('admin.ujiWawancara.filter', compact('ujiWawancara'));
    }

    public function hasil()
    {
        $peserta_id = Auth::user()->peserta;
        $tesPeserta = Uji_wawancara_peserta::where('peserta_id', $peserta_id->id)->first();
        if (!$tesPeserta) {
            return back()->withWarning('Data hasil tes wawancara anda belum diinput');
        }
        $data = Uji_wawancara::where('lowongan_id', $peserta_id->lowongan_id)->first();
        return view('user.ujiWawancara.hasil', compact('data'));
    }
}

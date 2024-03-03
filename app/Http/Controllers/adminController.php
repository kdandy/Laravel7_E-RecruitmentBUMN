<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Berita;
use App\Lowongan;
use App\Pendidikan_terakhir;
use App\Peserta;
use App\Posisi;
use App\Soal;
use App\Uji_wawancara;
use App\Uji_wawancara_peserta;
use App\Uji_kompetensi;
use Carbon\Carbon;

class adminController extends Controller
{
    public function index()
    {
        $posisi = Posisi::count();
        $lowongan = Lowongan::count();
        $pelamar = Peserta::count();
        $soal = Soal::count();
        $ujiKompetensi = Uji_kompetensi::count();
        $lulus = Uji_wawancara_peserta::where('status', 1)->count();
        return view('admin.index', compact('posisi', 'lowongan', 'pelamar', 'soal', 'ujiKompetensi', 'lulus'));
    }

    public function depan()
    {
        $berita = Berita::latest()->get();
        $posisi = Posisi::latest()->get();
        $now = Carbon::now()->format('Y-m-d');
        return view('welcome', compact('berita', 'now', 'posisi'));
    }

    public function lowonganDetail($uuid)
    {
        $now = Carbon::now()->format('Y-m-d');
        $berita = Berita::where('uuid', $uuid)->first();
        $ujiWawancara = Uji_wawancara::where('lowongan_id', $berita->lowongan->id)->first();
        return view('lowonganDetail', compact('berita', 'now', 'ujiWawancara'));
    }

    public function lowonganInput($uuid)
    {
        $pendidikan = Pendidikan_terakhir::latest()->get();
        $lowongan = Lowongan::where('uuid', $uuid)->first();
        $agama = Agama::latest()->get();
        return view('lowonganInput', compact('lowongan', 'pendidikan', 'agama'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Lowongan;
use App\Peserta;
use App\Uji_kesehatan;
use App\Uji_kesehatan_peserta;
use App\Uji_kompetensi;
use App\Uji_kompetensi_peserta;
use App\Uji_wawancara;
use App\Uji_wawancara_peserta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class reportController extends Controller
{
    public function biodataPelamar($uuid)
    {
        $data     = Peserta::where('uuid',$uuid)->first();
        $pdf      = PDF::loadView('formCetak.biodataPelamar', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan biodata Pelamar.pdf');
    }

    public function pelamar($uuid)
    {
        $lowongan = Lowongan::where('uuid',$uuid)->first();
        $data     = Peserta::where('lowongan_id',$lowongan->id)->get();
        $pdf      = PDF::loadView('formCetak.dataPelamar', ['data'=>$data, 'lowongan'=>$lowongan]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Pelamar.pdf');
    }

    public function filterPelamar()
    {
        $status = request()->status;
        $lowongan = Lowongan::findOrFail(request()->lowongan_id);
        $data     = Peserta::whereHas('user',function( $query) use ($status){
            $query->where('status',$status);
        })->with('user')->where('lowongan_id',$lowongan->id)->get();
        $pdf      = PDF::loadView('formCetak.filterPelamar', ['data'=>$data,'lowongan'=>$lowongan,'status'=>$status]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Pelamar Filter.pdf');
    }

    public function ujiKompetensi($uuid)
    {
        $uji_kompetensi = Uji_kompetensi::where('uuid',$uuid)->first();
        $data     = Uji_kompetensi_peserta::where('uji_kompetensi_id',$uji_kompetensi->id)->get();
        $pdf      = PDF::loadView('formCetak.dataUjiKompetensi', ['data'=>$data, 'uji_kompetensi'=>$uji_kompetensi]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Uji Kompetensi.pdf');
    }

    public function ujiKompetensiFilter()
    {
        $uji_kompetensi = Uji_kompetensi::findOrFail(request()->uji_id);
        if(request()->status == 1){
            $data     = Uji_kompetensi_peserta::where('uji_kompetensi_id',$uji_kompetensi->id)->where('nilai','>=', 75)->get();
        }else{
            $data     = Uji_kompetensi_peserta::where('uji_kompetensi_id',$uji_kompetensi->id)->where('nilai','<', 75)->get();
        }
        $status = request()->status;
        $pdf      = PDF::loadView('formCetak.dataUjiKompetensiFilter', ['data'=>$data, 'uji_kompetensi'=>$uji_kompetensi, 'status'=>$status]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Uji Kompetensi Filter .pdf');
    }

    public function ujiKesehatan($uuid)
    {
        $uji_kesehatan = Uji_kesehatan::where('uuid',$uuid)->first();
        $data     = Uji_kesehatan_peserta::where('uji_kesehatan_id',$uji_kesehatan->id)->get();
        $pdf      = PDF::loadView('formCetak.dataUjiKesehatan', ['data'=>$data, 'uji_kesehatan'=>$uji_kesehatan]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Uji Kesehatan.pdf');
    }

    public function ujiKesehatanFilter()
    {
        $uji_kesehatan = Uji_kesehatan::findOrFail(request()->uji_id);
        if(request()->status == 1){
            $data     = Uji_kesehatan_peserta::where('uji_kesehatan_id',$uji_kesehatan->id)->where('status', 1)->get();
        }else{
            $data     = Uji_kesehatan_peserta::where('uji_kesehatan_id',$uji_kesehatan->id)->where('status', 0)->get();
        }
        $status = request()->status;
        $pdf      = PDF::loadView('formCetak.dataUjikesehatanFilter', ['data'=>$data, 'uji_kesehatan'=>$uji_kesehatan, 'status'=>$status]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Uji kesehatan Filter .pdf');
    }

    public function ujiWawancara($uuid)
    {
        $uji_wawancara = Uji_wawancara::where('uuid',$uuid)->first();
        $data     = Uji_wawancara_peserta::where('uji_wawancara_id',$uji_wawancara->id)->get();
        $pdf      = PDF::loadView('formCetak.dataUjiWawancara', ['data'=>$data, 'uji_wawancara'=>$uji_wawancara]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Uji wawancara.pdf');
    }

    public function ujiWawancaraFilter()
    {
        $uji_wawancara = Uji_wawancara::findOrFail(request()->uji_id);
        if(request()->status == 1){
            $data     = Uji_wawancara_peserta::where('uji_wawancara_id',$uji_wawancara->id)->where('status', 1)->get();
        }else{
            $data     = Uji_wawancara_peserta::where('uji_wawancara_id',$uji_wawancara->id)->where('status', 0)->get();
        }
        $status = request()->status;
        $pdf      = PDF::loadView('formCetak.dataUjiWawancaraFilter', ['data'=>$data, 'uji_wawancara'=>$uji_wawancara, 'status'=>$status]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Uji wawancara Filter .pdf');
    }

    public function analisisPelamar($uuid)
    { 
        $lowongan = Lowongan::where('uuid',$uuid)->first();
        $data = $lowongan->peserta;
        $seleksi_berkas = Peserta::where('lowongan_id',$lowongan->id)->whereHas('user', function($query){
            $query->where('status',1);
        })->with('user')
        ->get();
        $pdf      = PDF::loadView('formCetak.analisisPelamar', ['data'=>$data, 'lowongan'=>$lowongan, 'seleksi_berkas'=>$seleksi_berkas]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Analsis Pelamar.pdf');
    }

    public function hasilAkhir($uuid)
    { 
        $lowongan = Lowongan::where('uuid',$uuid)->first();
        $pdf      = PDF::loadView('formCetak.hasilAkhir', [ 'lowongan'=>$lowongan]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Hasil Akhir.pdf');
    }

    public function lowongan()
    { 
        $data     = Lowongan::latest()->get();
        $now      = Carbon::now()->format('Y-m-d');
        $pdf      = PDF::loadView('formCetak.lowongan', [ 'data'=>$data, 'now'=>$now]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Data Lowongan.pdf');
    }

}

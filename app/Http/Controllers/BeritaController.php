<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Lowongan;
use App\Posisi;
use App\Pendidikan_terakhir;
use File;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::orderBy('id', 'desc')->get();
        $now = Carbon::now()->format('Y-m-d');
        $data =$data->map(function($item)use($now){
            if($now > $item->lowongan->tgl_selesai){
                $item['status'] = 2;

            }elseif($now < $item->lowongan->tgl_mulai){
                $item['status'] = 0;
                }
            else{
                $item['status'] = 1;
            }

            return $item;
        });
        $posisi = Posisi::orderBy('nama', 'asc')->get();
        return view('admin.berita.index', compact('data', 'posisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posisi = Posisi::orderBy('nama', 'asc')->get();
        $pendidikan = Pendidikan_terakhir::all();

        return view('admin.berita.add', compact('posisi','pendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        if($req->tgl_mulai > $req->tgl_selesai){
            return back()->withInput()->withWarning('Tanggal selesai tidak boleh sebelum tanggal mulai');
        }else{
        $berita = Berita::create($req->all());
        if ($req->foto != null) {
            $img = $req->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $berita->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/berita', $foto);
            $berita->foto = $foto;

        }

        $berita->update();
        $lowongan = $berita->lowongan()->create($req->all());

        return redirect()->route('beritaIndex')->withSuccess('Data berhasil disimpan');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $data = Berita::where('uuid', $uuid)->first();
        return view('admin.berita.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $data = Berita::where('uuid', $uuid)->first();
        $posisi = Posisi::orderBy('nama', 'asc')->get();
        $pendidikan = Pendidikan_terakhir::all();
        $posisi2 = json_encode($data->lowongan->posisi);

        return view('admin.berita.edit', compact('data', 'posisi', 'posisi2','pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $uuid)
    {
        if($req->tgl_mulai > $req->tgl_selesai){
            return back()->withWarning('Tanggal selesai tidak boleh sebelum tanggal mulai');
        }else{
        $berita = Berita::where('uuid', $uuid)->first();
        $berita->fill($req->all())->save();

        if ($req->foto != null) {
            $img = $req->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $berita->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/berita', $foto);
            $berita->foto = $foto;

        }
        $berita->update();
        $lowongan = Lowongan::where('berita_id', $berita->id)->first();
        $lowongan->fill($req->all())->save();

        return redirect()->route('beritaIndex')->withSuccess('Data berhasil diubah');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        $berita = Berita::where('uuid', $uuid)->first();
        File::delete('images/berita/' . $berita->foto);
        $berita->delete();
        return redirect()->route('beritaIndex')->withSuccess('Data berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    public function index()
    {
        $data = Agama::latest()->get();
        return view('admin.agama.index', compact('data'));
    }

    public function store(Request $req)
    {
        $data = Agama::create($req->all());

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function edit($uuid)
    {
        $data = Agama::where('uuid', $uuid)->first();

        return view('admin.agama.edit', compact('data'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Agama::where('uuid', $uuid)->first();

        $data->fill($req->all())->save();

        return redirect()->route('agamaIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Agama::where('uuid', $uuid)->first()->delete();

        return back()->withSuccess('Data berhasil dihapus');
    }
}

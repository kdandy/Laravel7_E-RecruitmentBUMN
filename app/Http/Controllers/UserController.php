<?php

namespace App\Http\Controllers;

use App\Peserta;
use App\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $data = User::where('role', 2)->orderBy('id', 'desc')->get();
        return view('admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $data = User::create($req->all());
        $data->password = Hash::make($req->password);
        if ($req->foto != null) {
            $img = $req->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $data->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/user', $foto);
            $data->foto = $foto;
        }

        $data->status = 1;
        $data->role = 2;
        $data->update();

        return back()->withSuccess('Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req, $uuid)
    {
        $data = User::where('uuid', $uuid)->first();

        return view('admin.user.edit', compact('data'));
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
        $data = User::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();
        if ($req->foto != null) {
            $img = $req->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $data->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/user', $foto);
            $data->foto = $foto;

        }
        if (isset($req->password)) {
            $data->password = Hash::make($req->password);
        }
        if (isset($req->status)) {
            $data->status = $req->status;
        }
        $data->update();

        return redirect()->route('userIndex')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        $data = User::where('uuid', $uuid)->first();
        File::delete('images/user' . $data->foto);
        $data->delete();
        return back()->withSuccess('Data berhasil dihapus');
    }

    public function pelamarIndex()
    {
        return view('user.index');
    }

    public function pelamarProfil()
    {
        $data = Auth::user();
        return view('user.profil', compact('data'));
    }

    public function pelamarProfilUpdate(Request $req, $uuid)
    {
        $data = User::findOrFail($uuid);

        $data->fill($req->all())->save();
        if ($req->foto != null) {
            $img = $req->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $data->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/user', $foto);
            $data->foto = $foto;

        }
        if (isset($req->password)) {
            $data->password = Hash::make($req->password);
        }
        if (isset($req->status)) {
            $data->status = $req->status;
        }
        $data->update();

        $peserta = Peserta::findOrFail($data->peserta->id);

        $peserta->fill($req->all())->save();

        return redirect()->route('pelamarIndex')->withSuccess('Profil berhasil diupdate');

    }
}

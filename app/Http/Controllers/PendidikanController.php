<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendidikan_terakhir;
use Illuminate\Support\Facades\Validator;

class PendidikanController extends Controller
{
    public function index()
    {
        $data = Pendidikan_terakhir::orderBy('id', 'desc')->get();
        return view('admin.pendidikan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
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
        $validator = Validator::make($req->all(), [
            'nama' => 'required|unique:pendidikan_terakhirs|max:50',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withWarning('Pendidikan terakhir tidak boleh sama')
                        ->withInput();
        }
        $data = Pendidikan_terakhir::create($req->all());

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
    public function edit($uuid)
    {
        $data = Pendidikan_terakhir::where('uuid', $uuid)->first();
        return view('admin.pendidikan.edit', compact('data'));
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
        $data = Pendidikan_terakhir::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();

        return redirect()->route('pendidikanIndex')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        $data = Pendidikan_terakhir::where('uuid', $uuid)->first();
        $data->delete();

        return back()->withSuccess('Data berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Posisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PosisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Posisi::orderBy('id', 'desc')->get();
        return view('admin.posisi.index', compact('data'));
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
            'nama' => 'required|unique:posisis|max:100',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withWarning('Posisi tidak boleh sama')
                        ->withInput();
        }

        $data = Posisi::create($req->all());

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
        $data = Posisi::where('uuid', $uuid)->first();
        return view('admin.posisi.edit', compact('data'));
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
        $data = Posisi::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();

        return redirect()->route('posisiIndex')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        $data = Posisi::where('uuid', $uuid)->first();
        $data->delete();

        return back()->withSuccess('Data berhasil dihapus');
    }
}

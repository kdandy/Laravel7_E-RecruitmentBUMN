<?php

namespace App\Http\Controllers;

use App\Lowongan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index()
    {
        $data = Lowongan::latest()->get();
        $now = Carbon::now()->format('Y-m-d');
        $data =$data->map(function($item)use($now){
            if($now > $item->tgl_selesai){
                $item['status'] = 2;

            }elseif($now < $item->tgl_mulai){
                $item['status'] = 0;
                }
            else{
                $item['status'] = 1;
            }

            return $item;
        });
        return view('admin.lowongan.index',compact('data'));
    }
}

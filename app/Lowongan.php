<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use Uuid;

    protected $fillable = [
        'berita_id', 'posisi', 'keterangan', 'ipk_min', 'pendidikan_terakhir_id'
        , 'tgl_mulai', 'tgl_selesai',
    ];

    protected $casts = [
        'posisi' => 'array',
    ];

    public function setPosisiAttribute($value)
    {
        $posisi = [];

        foreach ($value as $array_item) {

            $posisi[] = $array_item;
        }

        $this->attributes['posisi'] = json_encode($posisi);
    }

    public function berita()
    {
        return $this->belongsTo(Berita::class);
    }

    public function pendidikan_terakhir()
    {
        return $this->belongsTo(Pendidikan_terakhir::class);
    }

    public function peserta()
    {
        return $this->hasMany(Peserta::class);
    }

    public function uji_kompetensi()
    {
        return $this->hasMany(Uji_kompetensi::class);
    }


    public function uji_kesehatan()
    {
        return $this->hasMany(Uji_kesehatan::class);
    }

    public function uji_wawancara()
    {
        return $this->hasMany(Uji_wawancara::class);
    }

    public function hasil_akhir()
    {
        return $this->hasMany(Hasil_akhir::class);
    }

}

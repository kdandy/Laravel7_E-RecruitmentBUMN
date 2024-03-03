<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Uji_kompetensi extends Model
{
    use Uuid;

    protected $fillable = [
        'lowongan_id', 'tgl_ujian','durasi',
    ];

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class);
    }

    public function uji_kompetensi_peserta()
    {
        return $this->hasMany(Uji_kompetensi_peserta::class);
    }

}

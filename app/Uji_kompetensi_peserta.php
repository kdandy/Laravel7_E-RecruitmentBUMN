<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Uji_kompetensi_peserta extends Model
{
    use Uuid;

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function uji_kompetensi()
    {
        return $this->belongsTo(uji_kompetensi::class);
    }

    public function jawaban_peserta()
    {
        return $this->hasMany(Jawaban_peserta::class);
    }
}

<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Uji_kesehatan_peserta extends Model
{
    use Uuid;

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function uji_kesehatan()
    {
        return $this->belongsTo(Uji_kesehatan::class);
    }

}

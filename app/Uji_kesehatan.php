<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Uji_kesehatan extends Model
{
    use Uuid;

    protected $guarded = [

    ];

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class);
    }

    public function uji_kesehatan_peserta()
    {
        return $this->hasMany(Uji_kesehatan_peserta::class);
    }

}

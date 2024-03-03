<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Uji_wawancara extends Model
{
    use Uuid;

    protected $guarded = [

    ];

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class);
    }

    public function uji_wawancara_peserta()
    {
        return $this->hasMany(Uji_wawancara_peserta::class);
    }

}

<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Uji_wawancara_peserta extends Model
{
    use Uuid;

    protected $guarded = [

    ];

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function uji_wawancara()
    {
        return $this->belongsTo(Uji_wawancara::class);
    }

}

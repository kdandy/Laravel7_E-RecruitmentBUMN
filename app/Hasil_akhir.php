<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Hasil_akhir extends Model
{
    use Uuid;

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

}

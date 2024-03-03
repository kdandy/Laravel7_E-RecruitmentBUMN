<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Posisi extends Model
{
    use Uuid;

    protected $fillable = [
        'nama',
    ];
}

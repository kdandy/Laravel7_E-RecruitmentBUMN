<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use Uuid;

    protected $fillable = [
        'soal', 'a', 'b', 'c', 'd', 'kunci',
    ];
}

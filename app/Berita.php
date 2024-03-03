<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use Uuid;

    protected $fillable = [
        'user_id', 'judul', 'isi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lowongan()
    {
        return $this->hasOne(Lowongan::class);
    }

}

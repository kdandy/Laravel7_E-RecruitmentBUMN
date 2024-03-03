<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use Uuid;

    protected $fillable = [
        'user_id', 'lowongan_id', 'NIK', 'jk', 'tempat_lahir', 'tgl_lahir', 'agama', 'warga_negara', 'alamat_sekarang',
        'alamat_ktp', 'tlp_rumah', 'tlp_hp', 'hobi', 'transportasi', 'email', 'ijazah_terakhir',
        'tahun_lulus', 'lembaga', 'jurusan', 'ipk',
    ];

    public function setIpkAttribute($value)
    {
        $this->attributes['ipk'] = preg_replace('/,/', '.', $value);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pendidikan()
    {
        return $this->hasOne(Pendidikan_terakhir::class, 'id', 'ijazah_terakhir');
    }

    public function uji_kompetensi_peserta()
    {
        return $this->hasOne(Uji_kompetensi_peserta::class);
    }

    public function uji_kesehatan_peserta()
    {
        return $this->hasOne(Uji_kesehatan_peserta::class);
    }

    public function uji_wawancara_peserta()
    {
        return $this->hasOne(Uji_wawancara_peserta::class);
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class);
    }

    public function hasil_akhir()
    {
        return $this->hasOne(Hasil_akhir::class);
    }

}

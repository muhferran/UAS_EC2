<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    protected $fillable = [
        'no_kk', 'kepala_keluarga', 'alamat', 'rt_rw', 'kelurahan', 'kecamatan', 'kabupaten_kota', 'provinsi'
    ];
}

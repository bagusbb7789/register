<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jenispendaftaran extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "jenispendaftarans";
    
    protected $fillable = [
        "kode_jenispendaftaran",
        "nama_jenispendaftaran",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

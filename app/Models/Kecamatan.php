<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "kecamatans";
    
    protected $fillable = [
        "kode_kecamatan",
        "nama_kecamatan",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

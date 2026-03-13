<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "pendidikans";
    
    protected $fillable = [
        "kode_pendidikan",
        "nama_pendidikan",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

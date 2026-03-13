<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "negaras";
    
    protected $fillable = [
        "kode_negara",
        "nama_negara",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

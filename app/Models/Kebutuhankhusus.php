<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kebutuhankhusus extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "kebutuhankhusus";
    
    protected $fillable = [
        "kode_kebutuhankhusus",
        "nama_kebutuhankhusus",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

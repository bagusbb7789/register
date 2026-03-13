<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penghasilan extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "penghasilans";
    
    protected $fillable = [
        "kode_penghasilan",
        "nama_penghasilan",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

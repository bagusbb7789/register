<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "jenjangs";
    
    protected $fillable = [
        "kode_jenjang",
        "nama_jenjang",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

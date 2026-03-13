<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programstudi extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "programstudis";
    
    protected $fillable = [
        "kode_programstudi",
        "nama_programstudi",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progkodenim extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "progkodenims";
    
    protected $fillable = [
        "kode_progkodenim",
        "nama_progkodenim",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

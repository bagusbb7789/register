<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jalurmasuk extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "jalurmasuks";
    
    protected $fillable = [
        "kode_jalurmasuk",
        "nama_jalurmasuk",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

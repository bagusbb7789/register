<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perguruantinggi extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "perguruantinggis";
    
    protected $fillable = [
        "kode_perguruantinggi",
        "nama_perguruantinggi",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

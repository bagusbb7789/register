<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jenistinggal extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "jenistinggals";
    
    protected $fillable = [
        "kode_jenistinggal",
        "nama_jenistinggal",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

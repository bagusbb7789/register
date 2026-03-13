<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "pekerjaans";
    
    protected $fillable = [
        "kode_pekerjaan",
        "nama_pekerjaan",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

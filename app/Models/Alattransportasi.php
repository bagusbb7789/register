<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Alattransportasi extends Model
{
    //
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $table = "alattransportasi";
    protected $primaryKey = "id_alattransportasi";
    protected $fillable = [
        "nama_alattransportasi",
        "keterangan",
        "is_active",
        "is_deleted",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

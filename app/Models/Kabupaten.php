<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $table = 'kabupatens';

    protected $fillable = [
        'provinsi_id',
        'kode_kabupaten',
        'nama_kabupaten',
        'keterangan',
        'is_active',
        'is_deleted',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

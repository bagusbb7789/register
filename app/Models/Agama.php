<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $table = 'agamas';

    protected $fillable = [
        'nama_agama',
        'keterangan',
        'is_active',
        'is_deleted',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
}

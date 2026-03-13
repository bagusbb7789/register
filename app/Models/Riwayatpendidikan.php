<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riwayatpendidikan extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $table = 'riwayatpendidikans';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    
    protected $fillable = [
        'id',
        'kode_biodata',
        'programstudi_id',
        'peminatan',
        'jenispendaftaran_id',
        'jalurmasuk_id',
        'periode_pendaftaran',
        'tgl_masuk',
        'nim',
        'pembiayaan_awal',
        'asal_universitas',
        'asal_programstudi',
        'status_mahasiswa',
        'keterangan',
        'is_active',
        'is_deleted',
        'periode_keluar',
        'jeniskeluar_id',
        'tgl_keluar',
        'no_surat_keluar',
        'ipk',
        'no_ijazah',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
        'tgl_masuk' => 'date',
        'tgl_keluar' => 'date',
        'ipk' => 'decimal:2',
    ];
}

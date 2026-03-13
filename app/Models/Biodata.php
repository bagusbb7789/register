<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $table = 'biodatas';

    protected $fillable = [
        'kode_biodata',
        'nik',
        'nisn',
        'npwp',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama_id',
        'jalan',
        'rt',
        'rw',
        'kelurahan',
        'negara_id',
        'provinsi_id',
        'kabupaten_id',
        'kecamatan_id',
        'kode_pos',
        'telephone',
        'jenistinggal_id',
        'alattransportasi_id',
        'no_hp',
        'email',
        'penerima_kps',
        'no_kps',
        'foto',
        'keterangan',
        'is_active',
        'is_deleted',
        'nik_ayah',
        'nik_ibu',
        'nama_ayah',
        'nama_ibu',
        'nama_wali',
        'tgl_lahir_ayah',
        'tgl_lahir_ibu',
        'tgl_lahir_wali',
        'pendidikan_ayah',
        'pendidikan_ibu',
        'pendidikan_wali',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'pekerjaan_wali',
        'penghasilan_ayah',
        'penghasilan_ibu',
        'penghasilan_wali',
        'no_hp_ayah',
        'no_hp_ibu',
        'no_hp_wali',
        'alamat_ayah',
        'alamat_ibu',
        'alamat_wali',
        'keb_khusus',
        'keb_khusus_ayah',
        'keb_khusus_ibu',
        'keb_khusus_wali',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tgl_lahir_ayah' => 'date',
        'tgl_lahir_ibu' => 'date',
        'tgl_lahir_wali' => 'date',
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];
    
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('biodatas', function (Blueprint $table) {
            //
            $table->char('nik_ayah', 16);
            $table->char('nik_ibu', 16);
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('nama_wali')->nullable();
            $table->date('tgl_lahir_ayah');
            $table->date('tgl_lahir_ibu');
            $table->date('tgl_lahir_wali')->nullable();
            $table->string('pendidikan_ayah');
            $table->string('pendidikan_ibu');
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_ayah');
            $table->string('penghasilan_ibu');
            $table->string('penghasilan_wali')->nullable();
            $table->string('no_hp_ayah');
            $table->string('no_hp_ibu');
            $table->string('no_hp_wali')->nullable();
            $table->string('alamat_ayah');
            $table->string('alamat_ibu');
            $table->string('alamat_wali')->nullable();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('biodatas', function (Blueprint $table) {
            //
        });
    }
};

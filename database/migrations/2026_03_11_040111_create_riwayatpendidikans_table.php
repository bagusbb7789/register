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
        Schema::create('riwayatpendidikans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('kode_biodata');
            $table->uuid('programstudi_id');
            $table->foreign('programstudi_id')->references('id')->on('programstudis')->cascadeOnDelete();
            $table->string('peminatan')->nullable();
            $table->foreignId('jenispendaftaran_id')->constrained()->cascadeOnDelete();
            $table->foreignId('jalurmasuk_id')->constrained()->cascadeOnDelete();
            $table->char('periode_pendaftaran',5);
            $table->date('tgl_masuk');
            $table->char('nim', 16);
            $table->string('pembiayaan_awal');
            $table->string('asal_universitas')->nullable(); //jika jenis pendaftaranya bukan mahasiswa baru
            $table->string('asal_programstudi')->nullable(); //jika jenis pendaftaranya bukan mahasiswa baru
            $table->string('status_mahasiswa')->nullable();
            $table->string('keterangan')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_deleted')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayatpendidikans');
    }
};

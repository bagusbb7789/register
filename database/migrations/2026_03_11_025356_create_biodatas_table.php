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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->uuid('kode_biodata');
            $table->string('nik')->unique();
            $table->char('nisn',10)->unique();
            $table->string('npwp')->nullable();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->foreignId('agama_id')->constrained()->cascadeOnDelete();
            $table->string('jalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kelurahan');
            $table->foreignId('negara_id')->constrained()->cascadeOnDelete();
            $table->foreignId('provinsi_id')->constrained()->cascadeOnDelete();
            $table->foreignId('kabupaten_id')->constrained()->cascadeOnDelete();
            $table->foreignId('kecamatan_id')->constrained()->cascadeOnDelete();
            $table->string('kode_pos')->nullable();
            $table->string('telephone');
            $table->foreignId('jenistinggal_id')->constrained()->cascadeOnDelete();
            $table->foreignId('alattransportasi_id')->constrained()->cascadeOnDelete();
            $table->string('no_hp')->nullable();
            $table->string('email')->unique();
            $table->char('penerima_kps',1)->nullable();
            $table->string('no_kps')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('biodatas');
    }
};

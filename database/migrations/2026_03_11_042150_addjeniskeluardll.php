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
        Schema::table('riwayatpendidikans', function (Blueprint $table) {
            //
            $table->char('periode_keluar',5)->nullable();
            $table->string('jeniskeluar_id')->nullable();
            $table->date('tgl_keluar')->nullable();
            $table->string('no_surat_keluar')->nullable();
            $table->decimal('ipk', 3, 2)->nullable(); 
            $table->string('no_ijazah')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('riwayatpendidikans', function (Blueprint $table) {
            //
        });
    }
};

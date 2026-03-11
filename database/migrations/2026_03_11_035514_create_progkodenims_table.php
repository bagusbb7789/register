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
        Schema::create('progkodenims', function (Blueprint $table) {
            $table->id();
            $table->uuid('programstudi_id');
            $table->foreign('programstudi_id')->references('id')->on('programstudis')->cascadeOnDelete();
            $table->char('kode_progkodenim', 4)->unique();
            $table->string('nama_progkodenim');
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
        Schema::dropIfExists('progkodenims');
    }
};

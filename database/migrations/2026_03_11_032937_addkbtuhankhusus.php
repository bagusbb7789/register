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
            $table->string('keb_khusus')->nullable();
            $table->string('keb_khusus_ayah')->nullable();
            $table->string('keb_khusus_ibu')->nullable();
            $table->string('keb_khusus_wali')->nullable();
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

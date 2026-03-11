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
        Schema::create('perguruantinggis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('kode_pt', 5)->unique();
            $table->string('nama_pt');
            $table->string('keterangan')->nullable();
            $table->boolean('is_pembina')->default(false);
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
        Schema::dropIfExists('perguruantinggis');
    }
};

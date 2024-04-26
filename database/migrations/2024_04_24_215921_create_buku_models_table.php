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
        Schema::dropIfExists('buku');  // Drop the table if it exists

        Schema::create('buku', function (Blueprint $table) {
            $table->string('nomor_buku')->primary();
            $table->unsignedBigInteger('id_posisi')->nullable();
            $table->foreign('id_posisi')->references('id_posisi')->on('posisi')->onDelete('no action')->nullable();
            $table->unsignedBigInteger('id_penerbit')->nullable();
            $table->foreign('id_penerbit')->references('id_penerbit')->on('penerbit')->nullable();
            $table->string('judul_buku');
            $table->string('pengarang')->nullable();
            $table->integer('ketersediaan');  // Corrected data type
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};

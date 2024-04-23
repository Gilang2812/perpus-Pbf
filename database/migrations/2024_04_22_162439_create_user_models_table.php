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
        Schema::create('user', function (Blueprint $table) {
            $table->id('id_user');
            $table->unsignedBigInteger('id_jurusan')->nullable(); // id_jurusan boleh null
            $table->string('nim')->nullable();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('isAdmin')->default(0); // isAdmin diubah menjadi integer
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('id_jurusan')->references('id_jurusan')->on('jurusan')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};

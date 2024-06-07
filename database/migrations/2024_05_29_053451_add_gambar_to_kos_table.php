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
        Schema::create('gambar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kos_id')->constrained()->onDelete('cascade'); // Asumsi setiap gambar terkait dengan satu kos
            $table->string('nama')->nullable();
            $table->string('tipe')->nullable();
            $table->bigInteger('ukuran')->nullable();
            $table->binary('data'); // Menggunakan tipe BLOB untuk data gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar');
    }
};

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
        Schema::create('units', function (Blueprint $table) {
            $table->id(); 
            $table->string('kode_unit')->unique();
            $table->string('nama_unit')->unique();
            $table->integer('durasi_sewa');
            $table->integer('kapasitas');
            $table->string('drive_mode');
            $table->foreignId('category_id');
            $table->decimal('harga_sewa', 10, 2);
            $table->text('gambar_unit')->nullable();
            $table->text('gambar_detial')->nullable();
            $table->text('gambar_detail_2')->nullable();
            $table->text('gambar_detail_3')->nullable();
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};

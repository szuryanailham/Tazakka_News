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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->foreignId('unit_id');
            // input penyewaan
            $table->integer('durasi_sewa');
            $table->string('lokasi_janji_temu');
            $table->time('jam_janji_temu');
            $table->date('tanggal_penyewaan');
            // input pengembaliaan
            $table->string('lokasi_pengembalian');
            $table->time('jam_pengembalian');
            $table->date('tanggal_pengembalian');
            $table->decimal('total_harga', 10, 2);
            $table->timestamps();
            // inisial  foreign key 
            // $table->foreign('user_id')->references('user_id')->on('users');
            // $table->foreign('kode_unit')->references('kode_unit')->on('units');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

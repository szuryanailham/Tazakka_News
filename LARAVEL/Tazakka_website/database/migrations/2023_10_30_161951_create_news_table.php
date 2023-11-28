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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            // judul berita
            $table->string('title');
            // Author
            $table->foreignId('user_id');
            // Category
            $table->foreignid('category_id');
            // ulasan
            $table->string('slug')->unique();
            // kutipan 
            $table->text('kutipan');
            // isi berita
            $table->text('body');
            // gambar berita
            $table->text('image')->nullable();
            // tanggal post
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};

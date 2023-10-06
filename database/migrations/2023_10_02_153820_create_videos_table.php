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
        Schema::create('video', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('kategori_video');
            $table->integer('user_id');
            $table->string('gambar_thumbnail')->nullable();
            $table->string('video_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video');
    }
};

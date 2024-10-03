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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // Kolom id (primary key)
            $table->string('thumbnail'); // Kolom untuk URL atau path thumbnail
            $table->string('blog_title'); // Kolom untuk judul blog
            $table->string('author'); // Kolom untuk penulis
            $table->date('create_date'); // Kolom untuk tanggal pembuatan
            $table->text('content'); // Kolom untuk konten blog
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};

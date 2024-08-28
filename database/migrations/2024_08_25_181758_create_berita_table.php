<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judulBerita');
            $table->date('tanggalPublikasi');
            $table->text('konten');
            $table->string('penulis');
            $table->string('gambar')->nullable();
            $table->foreignId('kampus_id')->constrained('kampus')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('berita');
    }
}


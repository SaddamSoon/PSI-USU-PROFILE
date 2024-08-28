<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanTable extends Migration
{
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('namaKegiatan');
            $table->date('tanggalKegiatan');
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable();
            $table->foreignId('kampus_id')->constrained('kampus')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
}


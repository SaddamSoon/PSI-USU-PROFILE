<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakultasTable extends Migration
{
    public function up()
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id();
            $table->string('namaFakultas');
            $table->string('dekan');
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('kampus_id'); // Kolom foreign key
            $table->foreign('kampus_id')->references('id')->on('kampus')->onDelete('cascade'); // Constraint foreign key
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fakultas');
    }
}

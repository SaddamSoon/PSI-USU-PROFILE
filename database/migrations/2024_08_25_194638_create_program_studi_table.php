<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramStudiTable extends Migration
{
    public function up()
    {
        Schema::create('program_studi', function (Blueprint $table) {
            $table->id();
            $table->string('namaProgramStudi');
            $table->string('kodeProgramStudi');
            $table->string('jenjang');
            $table->text('deskripsi')->nullable();
            $table->foreignId('fakultas_id')->constrained('fakultas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('program_studi');
    }
}


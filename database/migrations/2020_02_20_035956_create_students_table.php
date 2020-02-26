<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nisn')->unique();
            $table->string('nis');
            $table->string('nama');
            $table->integer('id_kelas')->unsigned();
            $table->text('alamat');
            $table->string('no_telp');
            $table->integer('id_spp')->unsigned();
            $table->timestamps();


            $table->foreign('id_kelas')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('id_spp')->references('id')->on('spps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_student')->unsigned();
            $table->date('tanggal');
            $table->string('bulan');
            $table->string('jumlah');
            $table->integer('id_spp')->unsigned();
            $table->timestamps();


            $table->foreign('id_student')->references('id')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('payments');
    }
}

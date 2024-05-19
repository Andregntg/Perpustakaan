<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRakTable extends Migration
{
    public function up()
    {
        Schema::create('rak', function (Blueprint $table) {
            $table->bigIncrements('kd_rak'); // Menggunakan bigIncrements() untuk membuat kolom kunci utama dengan auto-increment
            $table->string('lokasi', 150);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rak');
    }
}

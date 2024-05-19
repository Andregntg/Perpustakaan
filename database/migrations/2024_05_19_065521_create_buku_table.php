<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('no_buku');
            $table->string('judul', 200);
            $table->string('edisi', 50);
            $table->unsignedBigInteger('no_rak');
            $table->foreign('no_rak')->references('kd_rak')->on('rak');
            $table->year('tahun');
            $table->string('penerbit', 100);
            $table->unsignedBigInteger('kd_penulis');
            $table->foreign('kd_penulis')->references('kd_penulis')->on('penulis');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
}

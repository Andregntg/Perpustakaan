<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('no_buku');
            $table->string('judul', 200);
            $table->string('edisi', 50);
            $table->unsignedInteger('no_rak');
            $table->date('tahun');
            $table->string('penerbit', 100);
            $table->unsignedInteger('kd_penulis');
            $table->timestamps();

            $table->foreign('no_rak')->references('kd_rak')->on('rak');
            $table->foreign('kd_penulis')->references('kd_penulis')->on('penulis');
        });
    }

    public function down()
    {
        Schema::table('buku', function (Blueprint $table) {
            $table->dropForeign(['no_rak']);
            $table->dropForeign(['kd_penulis']);
        });

        Schema::dropIfExists('buku');
    }
}

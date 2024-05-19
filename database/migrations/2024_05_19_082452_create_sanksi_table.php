<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanksiTable extends Migration
{
    public function up()
    {
        Schema::create('sanksi', function (Blueprint $table) {
            $table->increments('id_sanksi');
            $table->unsignedBigInteger('id_anggota');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota');
            $table->unsignedBigInteger('id_peminjaman');
            $table->foreign('id_peminjaman')->references('id_peminjaman')->on('peminjaman');
            $table->integer('jumlah_denda');
            $table->enum('status', ['tunggakan', 'lunas'])->default('tunggakan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sanksi');
    }
}

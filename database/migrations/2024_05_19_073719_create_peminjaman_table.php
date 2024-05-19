<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id_peminjaman');
            $table->unsignedBigInteger('id_anggota');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota');
            $table->unsignedBigInteger('no_buku');
            $table->foreign('no_buku')->references('no_buku')->on('buku');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali')->nullable();
            $table->enum('status', ['dipinjam', 'kembali'])->default('dipinjam');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}

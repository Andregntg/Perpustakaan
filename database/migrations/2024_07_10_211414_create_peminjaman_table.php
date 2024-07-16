<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->increments('id_peminjaman');
            $table->unsignedInteger('no_buku');
            $table->unsignedInteger('id_anggota');
            $table->date('tgl_peminjaman');
            $table->date('tgl_pengembalian');
            $table->enum('status', ['kembali', 'belum']);
            $table->timestamps();

            $table->foreign('no_buku')->references('no_buku')->on('buku');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota');
        });
    }

    public function down()
    {
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->dropForeign(['no_buku']);
            $table->dropForeign(['id_anggota']);
        });

        Schema::dropIfExists('peminjaman');
    }
}

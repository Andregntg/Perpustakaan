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
            $table->unsignedInteger('id_anggota');
            $table->unsignedInteger('id_peminjaman');
            $table->integer('jumlah_denda');
            $table->enum('status', ['tunggakan', 'lunas']);
            $table->timestamps();

            $table->foreign('id_anggota')->references('id_anggota')->on('anggota');
            $table->foreign('id_peminjaman')->references('id_peminjaman')->on('peminjaman');
        });
    }

    public function down()
    {
        Schema::table('sanksi', function (Blueprint $table) {
            $table->dropForeign(['id_anggota']);
            $table->dropForeign(['id_peminjaman']);
        });

        Schema::dropIfExists('sanksi');
    }
}

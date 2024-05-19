<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaTable extends Migration
{
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->bigIncrements('id_anggota'); // Kolom primary key dengan auto-increment
            $table->string('nama', 150);
            $table->string('no_hp', 16);
            $table->text('alamat');
            $table->string('email', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}

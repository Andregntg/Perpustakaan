<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenulisTable extends Migration
{
    public function up()
    {
        Schema::create('penulis', function (Blueprint $table) {
            $table->bigIncrements('kd_penulis'); // Kolom primary key dengan auto-increment
            $table->string('nama_penulis', 150);
            $table->string('email', 200);
            $table->string('alamat', 255);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 150);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penulis');
    }
}

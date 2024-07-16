<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenulisTable extends Migration
{
    public function up()
    {
        Schema::create('penulis', function (Blueprint $table) {
            $table->increments('kd_penulis');
            $table->string('nama_penulis', 150);
            $table->string('tempat_lahir', 100);
            $table->date('tgl_lahir');
            $table->string('email', 150);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penulis');
    }
}

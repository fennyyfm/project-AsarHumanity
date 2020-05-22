<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonaturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donatur', function (Blueprint $table) {
            $table->integer('id_donatur')->autoIncrement();
            $table->string('nama_donatur');
            $table->string('kontak_donatur');
            $table->date('tgl_donasi');
            $table->string('status');
            $table->integer('id_jenis')->unsigned();
            $table->foreign('id_jenis')->references('id_jenis')->on('jenis');
            $table->integer('jumlah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donatur');
    }
}

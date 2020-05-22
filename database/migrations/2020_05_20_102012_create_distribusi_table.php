<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribusiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribusi', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_distribusi');
            $table->integer('id_penerima')->unsigned();
            $table->foreign('id_penerima')->references('id')->on('penerima');
            $table->integer('id_jenis')->unsigned();
            $table->foreign('id_jenis')->references('id')->on('jenis');
            $table->integer('jumlah_distribusi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distribusi');
    }
}

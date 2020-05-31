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
            $table->bigInteger('id_penerima')->unsigned();
            $table->foreign('id_penerima')->references('id')->on('penerima');
            $table->bigInteger('id_jenis')->unsigned();
            $table->foreign('id_jenis')->references('id')->on('barang');
            $table->bigInteger('jumlah_distribusi')->unsigned();
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

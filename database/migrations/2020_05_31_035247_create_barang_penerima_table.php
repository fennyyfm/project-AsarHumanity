<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangPenerimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_penerima', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_distribusi')->unsigned();
            $table->foreign('id_distribusi')->references('id')->on('distribusi');
            $table->bigInteger('id_jenis')->unsigned();
            $table->foreign('id_jenis')->references('id')->on('barang');
            $table->bigInteger('jumlah')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_penerima');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerima', function (Blueprint $table) {
            $table->integer('id_penerima')->primary()->autoIncrement();
            $table->string('nama_penerima');
            $table->string('kontak_penerima')->unique();
            $table->string('daerah');
            $table->text('alamat');
            $table->integer('jumlah_menerima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerima');
    }
}

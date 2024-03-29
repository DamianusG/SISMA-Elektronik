<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('idBarang');
            $table->string('namaBarang');
            $table->string('slug');
            $table->string('tipeBarang');
            $table->longText('deskripsiBarang');
            $table->integer('hargaBarang');
            $table->integer('stokBarang');
            $table->softDeletes();
            $table->timestamps();
            // $table->primary('idBarang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}

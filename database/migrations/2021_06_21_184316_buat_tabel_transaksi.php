<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('idTransaksi');
            $table->unsignedBigInteger('idPembeli');
            $table->unsignedBigInteger('user_id');
            $table->string('slug');
            $table->string('tipeBarang');
            $table->longText('deskripsiBarang');
            $table->integer('hargaBarang');
            $table->integer('stokBarang');
            $table->softDeletes();
            $table->timestamps();
            // $table->primary('idTransaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}

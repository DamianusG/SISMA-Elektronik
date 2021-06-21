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
            $table->String('statusTransaksi');
            $table->integer('totalTransaksi');
            $table->String('slug');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelPembeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembeli', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('idPembeli');
            $table->string('namaPembeli');
            $table->string('slug');
            $table->string('noTelp');
            $table->longText('alamat');
            $table->softDeletes();
            $table->timestamps();
            // $table->primary('idPembeli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembeli');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_ds', function (Blueprint $table) {
            $table->increments('NoOrderDt');
            
            $table->string('NoOrder',   10);
            $table->foreign('NoOrder')->references('NoOrder')->on('order_hs');

            $table->string('KdProduk',   5);
            $table->integer('Jumlah');
            $table->decimal('Harga', $precision = 18, $scale = 2);
            $table->decimal('Diskon', $precision = 18, $scale = 2);
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
        Schema::dropIfExists('order_ds');
    }
}

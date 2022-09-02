<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiskonDsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diskon_ds', function (Blueprint $table) {
            $table->string('NoSurat', 10);
            $table->foreign('NoSurat')->references('NoSurat')->on('diskon_hs');
            
            $table->string('KdProduk', 5);
            $table->foreign('KdProduk')->references('KdProduk')->on('produks');
           
            $table->decimal('Diskon', $precision = 5, $scale = 2);
            $table->decimal('Min', $precision = 18, $scale = 2);
            $table->decimal('Max', $precision = 18, $scale = 2);
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
        Schema::dropIfExists('diskon_ds');
    }
}

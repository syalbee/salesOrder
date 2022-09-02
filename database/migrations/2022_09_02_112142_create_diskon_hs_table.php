<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiskonHsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diskon_hs', function (Blueprint $table) {
            $table->string('NoSurat', 10)->primary();
            $table->string('KdOutlet', 8);
            $table->foreign('KdOutlet')->references('KdOutlet')->on('outlets');
            $table->dateTime('Awal', $precision = 0);
            $table->dateTime('Akhir', $precision = 0);
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
        Schema::dropIfExists('diskon_hs');
    }
}

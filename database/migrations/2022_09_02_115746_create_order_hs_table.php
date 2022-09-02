<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderHsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_hs', function (Blueprint $table) {
            $table->string('NoOrder', 10)->primary();
            $table->dateTime('Tanggal', $precision = 0);
            $table->string('KdOutlet', 8);
            $table->boolean('Lunas');
            $table->decimal('TotalBayar', $precision = 18, $scale = 2);
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
        Schema::dropIfExists('order_hs');
    }
}

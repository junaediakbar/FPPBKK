<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('N_id');       
            $table->integer('user_id')->unsigned()->index();
            $table->Integer('product_id')->unsigned();
            $table->foreign('product_id')->references('Pr_id')->on('products');
            $table->integer('jumlah');
            $table->date('tgl_masuk');
            $table->date('tgl_pengiriman');
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
        Schema::dropIfExists('order');
    }
}

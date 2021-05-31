<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printings', function (Blueprint $table) {
            $table->bigIncrements('P_id');
            $table->string('P_nama');
            $table->string('P_email');
            $table->string('P_alamat');
            $table->string('P_notelp');
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
        Schema::dropIfExists('printings');
    }
}

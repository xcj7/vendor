<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id('d_id');
            $table->unsignedBigInteger('o_id');
            $table->unsignedBigInteger('p_id');
            $table->integer('qty');
            $table->float('Price');
            $table->foreign('o_id')->references('o_id')->on('orders');
            $table->foreign('p_id')->references('id')->on('create_cards');
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
        Schema::dropIfExists('orderdetails');
    }
};

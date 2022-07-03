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
        Schema::create('create_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id');
            $table->string('Product_name')->unique();
            $table->string('Small_description');
            $table->float('Price');
            $table->string('product_type');
            $table->string('image');
            $table->string('status');
            $table->foreign('vendor_id')->references('id')->on('all_users');
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
        Schema::dropIfExists('create_cards');
    }
};

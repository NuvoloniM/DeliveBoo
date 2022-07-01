<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes_orders', function (Blueprint $table) {
            $table->unsignedBigInteger('dishes_id');
            $table->unsignedBigInteger('orders_id');
            
            

            $table->id();
            $table->foreign('dishes_id')->references('id')->on('dishes')->onDelete('cascade');
            $table->foreign('orders_id')->references('id')->on('orders')->onDelete('cascade');
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
        Schema::dropIfExists('dishes_orders');
    }
}

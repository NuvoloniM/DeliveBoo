<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsRestaurantsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants_restaurants_types', function (Blueprint $table) {
            $table->unsignedBigInteger('restaurants_id');
            $table->unsignedBigInteger('restaurants_types_id');

            $table->id();
            $table->foreign('restaurants_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->foreign('restaurants_types_id')->references('id')->on('restaurant_types')->onDelete('cascade');

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
        Schema::dropIfExists('restaurants_restaurants_types');
    }
}

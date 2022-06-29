<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->unsignedBigInteger('kitchen_types_id')->nullable();
            $table->unsignedBigInteger('restaurants_id')->nullable();

            $table->id();
            $table->string('nome_prodotto');
            $table->decimal('prezzo', 5, 2);
            $table->boolean('vegetariano')->default(false);
            $table->boolean('glutine')->default(true);
            $table->foreign('kitchen_types_id')->references('id')->on('kitchen_types')->onDelete('set null');
            $table->foreign('restaurants_id')->references('id')->on('restaurants')->onDelete('set null');
            $table->string('immage')->nullable();
            $table->text('description')->nullable();
            $table->boolean('view')->nullable()->default(true);
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
        Schema::dropIfExists('menus');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->id();
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('set null');
            $table->string('indirizzo');
            $table->dateTime('data_ordine');
            $table->string('nome');
            $table->string('cognome');
            $table->decimal('prezzo_totale', 5, 2);
            $table->string('recapito');

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
        Schema::dropIfExists('orders');
    }
}

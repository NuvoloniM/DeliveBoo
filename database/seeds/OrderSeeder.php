<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $order = new Order;
        $order->restaurant_id = 1;
        $order->indirizzo = $faker->streetAddress();
        $order->data_ordine = $faker->dateTime();
        $order->nome = $faker->firstName();
        $order->cognome = $faker->lastName();
        $order->prezzo_totale = $faker->randomFloat(2, 1, 999);
        $order->recapito = 1234563;
        $order->save();
    }
}

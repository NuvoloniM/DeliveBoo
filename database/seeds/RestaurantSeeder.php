<?php

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use Faker\Generator as Faker;
class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $restaurant = new Restaurant();
        $restaurant->nome_attivita=$faker->word();
        $restaurant->indirizzo=$faker->streetAddress();
        $restaurant->imagine=$faker->imageUrl(640, 480, 'animals', true);
        $restaurant->save();
    }
}

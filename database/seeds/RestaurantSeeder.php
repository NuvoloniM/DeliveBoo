<?php

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\User;
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
        $new_restaurant = new Restaurant();
        $new_restaurant->user_id=1;
        $new_restaurant->nome_attivita='Da Salvatore';
        $new_restaurant->indirizzo='Via Petrarca 12';
        // $new_restaurant->immagine=$faker->imageUrl(640, 480, 'animals', true);
        $new_restaurant->immagine = 'immagine/restaurant1.jpg';
        $new_restaurant->save();
    }
}

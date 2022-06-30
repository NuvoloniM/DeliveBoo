<?php

use Illuminate\Database\Seeder;
use App\Models\Dish;
use Illuminate\Support\Arr;

use Faker\Generator as Faker;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $kitchenTypes = [1,2,3,];

        for ($i=0; $i < 5 ; $i++) { 
            $new_dish = new Dish();

            $new_dish->nome_prodotto = $faker->word();
            $new_dish->prezzo = $faker->randomFloat(2, 10, 90);
            $new_dish->vegetariano = $faker->boolean();
            $new_dish->vegetariano = $faker->boolean();
            $new_dish->kitchen_types_id = Arr::random($kitchenTypes);
            $new_dish->restaurants_id = 1;
            $new_dish->immage = $faker->imageUrl(640, 480, 'animals', true);
            $new_dish->description = $faker->paragraph(1);
            $new_dish->view = $faker->boolean();
            $new_dish->save();
        }

    }
}

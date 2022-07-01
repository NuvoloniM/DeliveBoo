<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\RestaurantType;
class RestaurantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurant_type=[
            [
                "tipologia"=>"italiana",
                "color"=>"red",
            ],
            [
                "tipologia"=>"giapponese",
                "color"=>"orange",
            ],
            [
                "tipologia"=>"kebab",
                "color"=>"green",
            ],
            [
                "tipologia"=>"pizzeria",
                "color"=>"blue",
            ],
            [
                "tipologia"=>"gelateria",
                "color"=>"pink",
            ],
            [
                "tipologia"=>"cinese",
                "color"=>"yellow",
            ],
            [
                "tipologia"=>"indiano",
                "color"=>"grey",
            ]
            ];

        foreach($restaurant_type as $type){
            $new_type= new RestaurantType();
            $new_type->tipologia=$type['tipologia'];
            $new_type->color=$type['color'];
            $new_type->save();
        }
    }
}

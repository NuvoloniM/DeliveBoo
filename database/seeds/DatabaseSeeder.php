<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(

            [
                UserSeeder::class,
                RestaurantTypeSeeder::class,
                RestaurantSeeder::class,
                OrderSeeder::class,
                KitchenTypeSeeder::class,
                DishSeeder::class,
            ]
        );
    }
}

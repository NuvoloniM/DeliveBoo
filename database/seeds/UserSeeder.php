<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user = new User();
        $user->email = $faker->email();
        $user->name = $faker->firstName();
        $user->logo = $faker->imageUrl(250, 250, 'cibo', true);
        $user->password = bcrypt('password');
        $user->p_iva = $faker->regexify('[A-Z]{9}[0-9]{11}');

        $user->save();
    }
}

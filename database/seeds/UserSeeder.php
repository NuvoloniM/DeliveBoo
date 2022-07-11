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
        // Proprietari ristoranti
        $user1 = new User();
        $user1->email = 'user1@gmail.com';
        $user1->name = 'Salvatore Esposito';
        $user1->logo = '1-archivio-storico-napoli.jpg';
        $user1->password = bcrypt('password');
        $user1->p_iva = $faker->regexify('[A-Z]{9}[0-9]{11}');
        $user1->save();

        $user2 = new User();
        $user2->email = 'user2@gmail.com';
        $user2->name = 'Ciro Caputo';
        $user2->logo = '2-ristorante-michelasso.jpg';
        $user2->password = bcrypt('password');
        $user2->p_iva = $faker->regexify('[A-Z]{9}[0-9]{11}');
        $user2->save();

        // Sorbillo
        $user3 = new User();
        $user3->email = 'ginosorbillo@gmail.com';
        $user3->name = 'Gino Sorbillo';
        $user3->logo = '16-sorbillo-centro.jpg';
        $user3->password = bcrypt('password');
        $user3->p_iva = $faker->regexify('[A-Z]{9}[0-9]{11}');
        $user3->save();

        // Proprietario Pizzerie
        $user4 = new User();
        $user4->email = 'user4@gmail.com';
        $user4->name = 'Gennaro Capone';
        $user4->logo = '13-fratelli-bufala.jpg';
        $user4->password = bcrypt('password');
        $user4->p_iva = $faker->regexify('[A-Z]{9}[0-9]{11}');
        $user4->save();

        // Proprietario Giapponesi
        $user5 = new User();
        $user5->email = 'user5@gmail.com';
        $user5->name = 'Yoko Hono';
        $user5->logo = '30-koi.jpg';
        $user5->password = bcrypt('password');
        $user5->p_iva = $faker->regexify('[A-Z]{9}[0-9]{11}');
        $user5->save();

        // Proprietario Kebab
        $user6 = new User();
        $user6->email = 'user6@gmail.com';
        $user6->name = 'Ali Guzelia';
        $user6->logo = '32-taj-mahal.jpg';
        $user6->password = bcrypt('password');
        $user6->p_iva = $faker->regexify('[A-Z]{9}[0-9]{11}');
        $user6->save();

        // Proprietario Gelaterie
        $user7 = new User();
        $user7->email = 'user7@gmail.com';
        $user7->name = 'Luigi Russo';
        $user7->logo = '43-poppella.jpg';
        $user7->password = bcrypt('password');
        $user7->p_iva = $faker->regexify('[A-Z]{9}[0-9]{11}');
        $user7->save();
    }
}

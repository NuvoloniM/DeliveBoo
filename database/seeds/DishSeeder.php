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
        // $kitchen_type = [
        //  'Antipasto', 'Primo', 'Secondo', 'Contorno', 'Pizza', 'Sushi', 'Dolce', 'Bibita', 'Vino',];

        // Piatti Sorbillo
        $new_dish3 = new Dish();
        $new_dish3->nome_prodotto = 'Parmigiana di melanzane';
        $new_dish3->prezzo = 9;
        $new_dish3->vegetariano = 1;
        $new_dish3->glutine = 1;
        $new_dish3->kitchen_types_id = 1;
        $new_dish3->restaurants_id = 16;
        $new_dish3->immage = 'dishes/3-parmigiana.jpg';
        $new_dish3->description = 'Melanzane fritte e messe in teglia alla Parmigiana (sovrapposte incrociate). Aggiungiamo Pomodoro, Parmigiano Reggiano Dop, Fiordilatte, Olio Evo italiano e Basilico';
        $new_dish3->view = 0;
        $new_dish3->save();

        $new_dish4 = new Dish();
        $new_dish4->nome_prodotto = 'Prosciutto e mozzarella';
        $new_dish4->prezzo = 9;
        $new_dish4->vegetariano = 1;
        $new_dish4->glutine = 1;
        $new_dish4->kitchen_types_id = 1;
        $new_dish4->restaurants_id = 16;
        $new_dish4->immage = 'dishes/4-prosciutto-mozzarella.jpg';
        $new_dish4->description = 'Prosciutto crudo di Parma Dop e mozzarella di bufala campana Dop';
        $new_dish4->view = 0;
        $new_dish4->save();

        $new_dish5 = new Dish();
        $new_dish5->nome_prodotto = 'Fiori di zucca';
        $new_dish5->prezzo = 9;
        $new_dish5->vegetariano = 1;
        $new_dish5->glutine = 1;
        $new_dish5->kitchen_types_id = 1;
        $new_dish5->restaurants_id = 16;
        $new_dish5->immage = 'dishes/5-fiori-zucca.jpg';
        $new_dish5->description = 'Ripieni con ricotta, provola, pepe, sale e serviti con salsa Sorbillo';
        $new_dish5->view = 0;
        $new_dish5->save();

        $new_dish6 = new Dish();
        $new_dish6->nome_prodotto = 'I Fritti';
        $new_dish6->prezzo = 9;
        $new_dish6->vegetariano = 1;
        $new_dish6->glutine = 1;
        $new_dish6->kitchen_types_id = 1;
        $new_dish6->restaurants_id = 16;
        $new_dish6->immage = 'dishes/6-frittura.jpg';
        $new_dish6->description = '2 crocchè (100% patate), 1 frittatina di pasta, verdure in tempura';
        $new_dish6->view = 0;
        $new_dish6->save();

        $new_dish7 = new Dish();
        $new_dish7->nome_prodotto = 'Calamarelle fritte';
        $new_dish7->prezzo = 9;
        $new_dish7->vegetariano = 1;
        $new_dish7->glutine = 1;
        $new_dish7->kitchen_types_id = 1;
        $new_dish7->restaurants_id = 16;
        $new_dish7->immage = 'dishes/7-calamari-fritti.jpg';
        $new_dish7->description = 'Un antipasto di mare semplicissimo e sfizioso, perfetto per iniziare in ogni occasione';
        $new_dish7->view = 0;
        $new_dish7->save();

        $new_dish8 = new Dish();
        $new_dish8->nome_prodotto = 'Polpo con patate';
        $new_dish8->prezzo = 12;
        $new_dish8->vegetariano = 1;
        $new_dish8->glutine = 1;
        $new_dish8->kitchen_types_id = 1;
        $new_dish8->restaurants_id = 16;
        $new_dish8->immage = 'dishes/8-polpo-patate.jpg';
        $new_dish8->description = ' Polpo con patate all insalata condito con una citronette al prezzemolo';
        $new_dish8->view = 0;
        $new_dish8->save();



        // Pizze
        $new_dish10 = new Dish();
        $new_dish10->nome_prodotto = 'Pizza fritta';
        $new_dish10->prezzo = 9;
        $new_dish10->vegetariano = 1;
        $new_dish10->glutine = 1;
        $new_dish10->kitchen_types_id = 5;
        $new_dish10->restaurants_id = 16;
        $new_dish10->immage = 'dishes/10-pizza-fritta.jpg';
        $new_dish10->description = 'Pizza fritta in olio Evo ripiena di ricotta e cicole';
        $new_dish10->view = 0;
        $new_dish10->save();

        $new_dish11 = new Dish();
        $new_dish11->nome_prodotto = 'Pizza Regina';
        $new_dish11->prezzo = 9;
        $new_dish11->vegetariano = 1;
        $new_dish11->glutine = 1;
        $new_dish11->kitchen_types_id = 5;
        $new_dish11->restaurants_id = 16;
        $new_dish11->immage = 'dishes/11-pizza-margherita.jpg';
        $new_dish11->description = 'Fiordilatte Latteria Sorrentina Pomodoro Bio, Olio Evo Italiano e Basilico fresco';
        $new_dish11->view = 0;
        $new_dish11->save();

    }
}

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
        // Antipasti
        $new_dish3 = new Dish();
        $new_dish3->nome_prodotto = 'Parmigiana di melanzane';
        $new_dish3->prezzo = 9;
        $new_dish3->vegetariano = 1;
        $new_dish3->glutine = 1;
        $new_dish3->kitchen_types_id = 1;
        $new_dish3->restaurants_id = 16;
        $new_dish3->immage = 'dishes/3-parmigiana.jpg';
        $new_dish3->description = 'Melanzane fritte e messe in teglia alla Parmigiana (sovrapposte incrociate). Aggiungiamo Pomodoro, Parmigiano Reggiano Dop, Fiordilatte, Olio Evo italiano e Basilico.';
        $new_dish3->view = 1;
        $new_dish3->save();

        $new_dish4 = new Dish();
        $new_dish4->nome_prodotto = 'Prosciutto e mozzarella';
        $new_dish4->prezzo = 9;
        $new_dish4->vegetariano = 1;
        $new_dish4->glutine = 1;
        $new_dish4->kitchen_types_id = 1;
        $new_dish4->restaurants_id = 16;
        $new_dish4->immage = 'dishes/4-prosciutto-mozzarella.jpeg';
        $new_dish4->description = 'Prosciutto crudo di Parma Dop e mozzarella di bufala campana Dop.';
        $new_dish4->view = 1;
        $new_dish4->save();

        $new_dish5 = new Dish();
        $new_dish5->nome_prodotto = 'Fiori di zucca';
        $new_dish5->prezzo = 9;
        $new_dish5->vegetariano = 1;
        $new_dish5->glutine = 1;
        $new_dish5->kitchen_types_id = 1;
        $new_dish5->restaurants_id = 16;
        $new_dish5->immage = 'dishes/5-fiori-zucca.jpg';
        $new_dish5->description = 'Ripieni con ricotta, provola, pepe, sale e serviti con salsa Sorbillo.';
        $new_dish5->view = 1;
        $new_dish5->save();

        $new_dish6 = new Dish();
        $new_dish6->nome_prodotto = 'I Fritti';
        $new_dish6->prezzo = 9;
        $new_dish6->vegetariano = 1;
        $new_dish6->glutine = 1;
        $new_dish6->kitchen_types_id = 1;
        $new_dish6->restaurants_id = 16;
        $new_dish6->immage = 'dishes/6-frittura.jpg';
        $new_dish6->description = '2 crocchè (100% patate), 1 frittatina di pasta, verdure in tempura.';
        $new_dish6->view = 1;
        $new_dish6->save();

        $new_dish7 = new Dish();
        $new_dish7->nome_prodotto = 'Calamarelle fritte';
        $new_dish7->prezzo = 9;
        $new_dish7->vegetariano = 1;
        $new_dish7->glutine = 1;
        $new_dish7->kitchen_types_id = 1;
        $new_dish7->restaurants_id = 16;
        $new_dish7->immage = 'dishes/7-calamari-fritti.jpg';
        $new_dish7->description = 'Un antipasto di mare semplicissimo e sfizioso, perfetto per iniziare in ogni occasione.';
        $new_dish7->view = 1;
        $new_dish7->save();

        $new_dish8 = new Dish();
        $new_dish8->nome_prodotto = 'Polpo con patate';
        $new_dish8->prezzo = 12;
        $new_dish8->vegetariano = 1;
        $new_dish8->glutine = 1;
        $new_dish8->kitchen_types_id = 1;
        $new_dish8->restaurants_id = 16;
        $new_dish8->immage = 'dishes/8-polpo-patate.jpg';
        $new_dish8->description = ' Polpo con patate all insalata condito con una citronette al prezzemolo.';
        $new_dish8->view = 1;
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
        $new_dish10->description = 'Pizza fritta in olio Evo ripiena di ricotta e cicole.';
        $new_dish10->view = 1;
        $new_dish10->save();

        $new_dish11 = new Dish();
        $new_dish11->nome_prodotto = 'Pizza Regina';
        $new_dish11->prezzo = 9;
        $new_dish11->vegetariano = 1;
        $new_dish11->glutine = 1;
        $new_dish11->kitchen_types_id = 5;
        $new_dish11->restaurants_id = 16;
        $new_dish11->immage = 'dishes/11-pizza-margherita.jpg';
        $new_dish11->description = 'Fiordilatte Latteria Sorrentina Pomodoro Bio, Olio Evo Italiano e Basilico fresco.';
        $new_dish11->view = 1;
        $new_dish11->save();

        $new_dish12 = new Dish();
        $new_dish12->nome_prodotto = 'Diavola';
        $new_dish12->prezzo = 9;
        $new_dish12->vegetariano = 1;
        $new_dish12->glutine = 1;
        $new_dish12->kitchen_types_id = 5;
        $new_dish12->restaurants_id = 16;
        $new_dish12->immage = 'dishes/12-pizza-diavola.jpg';
        $new_dish12->description = 'Fiordilatte con aggiunta di Latte di Bufala, Pomodoro Bio, Salame Piccante, Olio Evo Italiano e Basilico fresco.';
        $new_dish12->view = 1;
        $new_dish12->save();

        $new_dish13 = new Dish();
        $new_dish13->nome_prodotto = 'Bufala';
        $new_dish13->prezzo = 12;
        $new_dish13->vegetariano = 1;
        $new_dish13->glutine = 1;
        $new_dish13->kitchen_types_id = 5;
        $new_dish13->restaurants_id = 16;
        $new_dish13->immage = 'dishes/13-pizza-bufala.jpg';
        $new_dish13->description = 'Bufala Campana Dop, Pomodoro Bio, Parmigiano Reggiano Malandrone 1477 (36 mesi), Olio Evo Italiano e Basilico fresco.';
        $new_dish13->view = 1;
        $new_dish13->save();

        $new_dish14 = new Dish();
        $new_dish14->nome_prodotto = 'Salsiccia e Friarielli';
        $new_dish14->prezzo = 13;
        $new_dish14->vegetariano = 1;
        $new_dish14->glutine = 1;
        $new_dish14->kitchen_types_id = 5;
        $new_dish14->restaurants_id = 16;
        $new_dish14->immage = 'dishes/14-salsiccia-e-friarielli.jpg';
        $new_dish14->description = 'Salsiccia Fresca di Maiale, Friarielli saltati in padella con Peperoncino, Provola affumicata, Olio Evo Italiano e Basilico fresco.';
        $new_dish14->view = 1;
        $new_dish14->save();

        $new_dish15 = new Dish();
        $new_dish15->nome_prodotto = 'Cotto e Funghi';
        $new_dish15->prezzo = 14;
        $new_dish15->vegetariano = 1;
        $new_dish15->glutine = 1;
        $new_dish15->kitchen_types_id = 5;
        $new_dish15->restaurants_id = 16;
        $new_dish15->immage = 'dishes/15-cotto-funghi.jpg';
        $new_dish15->description = 'Fiordilatte con aggiunta di Latte di Bufala, Prosciutto Cotto Nazionale Villani, Funghi, Olio EVO Italiano e Basilico fresco.';
        $new_dish15->view = 1;
        $new_dish15->save();

        $new_dish16 = new Dish();
        $new_dish16->nome_prodotto = 'Margherita Gialla';
        $new_dish16->prezzo = 12;
        $new_dish16->vegetariano = 1;
        $new_dish16->glutine = 1;
        $new_dish16->kitchen_types_id = 5;
        $new_dish16->restaurants_id = 16;
        $new_dish16->immage = 'dishes/16-margherita-gialla.jpg';
        $new_dish16->description = 'Pomodorini Gialli del Vesuvio, Provola, Conciato Romano (il formaggio più antico d’Italia), Olio EVO Italiano.';
        $new_dish16->view = 1;
        $new_dish16->save();

        $new_dish17 = new Dish();
        $new_dish17->nome_prodotto = 'Mortadella Bologna Igp';
        $new_dish17->prezzo = 13;
        $new_dish17->vegetariano = 1;
        $new_dish17->glutine = 1;
        $new_dish17->kitchen_types_id = 5;
        $new_dish17->restaurants_id = 16;
        $new_dish17->immage = 'dishes/17-mortadella.jpg';
        $new_dish17->description = 'Mortadella Bologna Igp Lo Santo Villani in vescica naturale legata a mano e cotta lentamente come da tradizione, Fiordilatte "Latteria Sorrentina", Pesto di Pistacchio, Olio Evo Italiano e Basilico.';
        $new_dish17->view = 1;
        $new_dish17->save();

        $new_dish18 = new Dish();
        $new_dish18->nome_prodotto = 'Pizza Dell’Alleanza';
        $new_dish18->prezzo = 12;
        $new_dish18->vegetariano = 1;
        $new_dish18->glutine = 1;
        $new_dish18->kitchen_types_id = 5;
        $new_dish18->restaurants_id = 16;
        $new_dish18->immage = 'dishes/18-pizza-alleanza.jpg';
        $new_dish18->description = 'Pomodoro Bio, Fiordilatte Latteria Sorrentina, Salsiccia Rossa stagionata di Castelpoto (leggermente piccante), Cacioricotta di Capra Cilentana Az. Agricola I Filadelfi 1828, Olio EVO Italiano, Basilico fresco.';
        $new_dish18->view = 1;
        $new_dish18->save();

        $new_dish19 = new Dish();
        $new_dish19->nome_prodotto = 'Prosciutto Crudo di Parma';
        $new_dish19->prezzo = 14;
        $new_dish19->vegetariano = 1;
        $new_dish19->glutine = 1;
        $new_dish19->kitchen_types_id = 5;
        $new_dish19->restaurants_id = 16;
        $new_dish19->immage = 'dishes/19-pizza-prosciutto-crudo.jpg';
        $new_dish19->description = 'Prosciutto Crudo di Parma D.O.P. (Stagionato 18 mesi), Pomodorini Freschi, Provola Affumicata, Rucola Fresca, Scaglie di Parmigiano Reggiano Malandrone 1477 (36mesi), Olio EVO Italiano.';
        $new_dish19->view = 1;
        $new_dish19->save();



        // Dolci
        $new_dish20 = new Dish();
        $new_dish20->nome_prodotto = 'Tiramisù di Casa Sorbillo';
        $new_dish20->prezzo = 7;
        $new_dish20->vegetariano = 1;
        $new_dish20->glutine = 1;
        $new_dish20->kitchen_types_id = 7;
        $new_dish20->restaurants_id = 16;
        $new_dish20->immage = 'dishes/20-tiramisu.jpg';
        $new_dish20->description = 'Dessert al cucchiaio a base di savoiardi inzuppati nel caffè e ricoperti di crema mascarpone, spolverata di cacao fondente.';
        $new_dish20->view = 1;
        $new_dish20->save();

        $new_dish21 = new Dish();
        $new_dish21->nome_prodotto = 'Caprese di Sal de Riso';
        $new_dish21->prezzo = 7;
        $new_dish21->vegetariano = 1;
        $new_dish21->glutine = 1;
        $new_dish21->kitchen_types_id = 7;
        $new_dish21->restaurants_id = 16;
        $new_dish21->immage = 'dishes/21-torta-caprese.jpg';
        $new_dish21->description = 'Dolce partenopeo tipico dell’Isola di Capri a base di cioccolato fondente e mandorle.';
        $new_dish21->view = 1;
        $new_dish21->save();

        $new_dish22 = new Dish();
        $new_dish22->nome_prodotto = 'Pastiera di Sal de Riso';
        $new_dish22->prezzo = 7;
        $new_dish22->vegetariano = 1;
        $new_dish22->glutine = 1;
        $new_dish22->kitchen_types_id = 7;
        $new_dish22->restaurants_id = 16;
        $new_dish22->immage = 'dishes/22-pastiera.jpg';
        $new_dish22->description = 'Torta di pasta frolla farcita con un impasto a base di ricotta, zucchero, uova e grano bollito nel latte, ricoperto di listarelle della stessa pasta frolla intrecciate a croce di sant Andrea.';
        $new_dish22->view = 1;
        $new_dish22->save();

        $new_dish23 = new Dish();
        $new_dish23->nome_prodotto = 'Ricotta e pera Sal de Riso';
        $new_dish23->prezzo = 7;
        $new_dish23->vegetariano = 1;
        $new_dish23->glutine = 1;
        $new_dish23->kitchen_types_id = 7;
        $new_dish23->restaurants_id = 16;
        $new_dish23->immage = 'dishes/23-ricotta-e-pera.jpg';
        $new_dish23->description = 'Torta ideata da Sal De Riso, a base di nocciole di Giffoni, ricotta e pere pennate di Agerola.';
        $new_dish23->view = 1;
        $new_dish23->save();

        $new_dish24 = new Dish();
        $new_dish24->nome_prodotto = 'Delizia a limone di Sal De Riso';
        $new_dish24->prezzo = 7;
        $new_dish24->vegetariano = 1;
        $new_dish24->glutine = 1;
        $new_dish24->kitchen_types_id = 7;
        $new_dish24->restaurants_id = 16;
        $new_dish24->immage = 'dishes/24-delizia.jpg';
        $new_dish24->description = 'Torta fatta con base di pan di Spagna bagnato con sciroppo di limoncello, farcita e ricoperta di crema a base di limone della costiera.';
        $new_dish24->view = 1;
        $new_dish24->save();

        $new_dish25 = new Dish();
        $new_dish25->nome_prodotto = 'Nocciomandopistacchiato di Casa Infante';
        $new_dish25->prezzo = 7;
        $new_dish25->vegetariano = 1;
        $new_dish25->glutine = 1;
        $new_dish25->kitchen_types_id = 7;
        $new_dish25->restaurants_id = 16;
        $new_dish25->immage = 'dishes/25-nocciomandopista.jpg';
        $new_dish25->description = 'Dolce al bicchiere creato dalla Pasticceria Casa Infante, a base di nocciole vesuviane, pistacchi e mandorle di Bronte.';
        $new_dish25->view = 1;
        $new_dish25->save();

        $new_dish26 = new Dish();
        $new_dish26->nome_prodotto = 'Babà di Casa Infante';
        $new_dish26->prezzo = 7;
        $new_dish26->vegetariano = 1;
        $new_dish26->glutine = 1;
        $new_dish26->kitchen_types_id = 7;
        $new_dish26->restaurants_id = 16;
        $new_dish26->immage = 'dishes/26-baba.jpg';
        $new_dish26->description = 'Dolce al bicchiere creato dalla Pasticceria Casa Infante, a base di pan di spagna, bagnato con rum.';
        $new_dish26->view = 1;
        $new_dish26->save();



        // Bibite
        $new_dish27 = new Dish();
        $new_dish27->nome_prodotto = 'Acqua Panna';
        $new_dish27->prezzo = 3;
        $new_dish27->vegetariano = 1;
        $new_dish27->glutine = 1;
        $new_dish27->kitchen_types_id = 8;
        $new_dish27->restaurants_id = 16;
        $new_dish27->immage = 'dishes/27-acqua-panna.jpg';
        $new_dish27->description = '45 cl.';
        $new_dish27->view = 1;
        $new_dish27->save();

        $new_dish28 = new Dish();
        $new_dish28->nome_prodotto = 'Acqua San Pellegrino';
        $new_dish28->prezzo = 3;
        $new_dish28->vegetariano = 1;
        $new_dish28->glutine = 1;
        $new_dish28->kitchen_types_id = 8;
        $new_dish28->restaurants_id = 16;
        $new_dish28->immage = 'dishes/28-san-pellegrino.jpg';
        $new_dish28->description = '45 cl.';
        $new_dish28->view = 1;
        $new_dish28->save();

        $new_dish29 = new Dish();
        $new_dish29->nome_prodotto = 'Coca Cola';
        $new_dish29->prezzo = 3;
        $new_dish29->vegetariano = 1;
        $new_dish29->glutine = 1;
        $new_dish29->kitchen_types_id = 8;
        $new_dish29->restaurants_id = 16;
        $new_dish29->immage = 'dishes/29-coca-cola.jpeg';
        $new_dish29->description = '33 cl.';
        $new_dish29->view = 1;
        $new_dish29->save();

        $new_dish30 = new Dish();
        $new_dish30->nome_prodotto = 'Fanta';
        $new_dish30->prezzo = 3;
        $new_dish30->vegetariano = 1;
        $new_dish30->glutine = 1;
        $new_dish30->kitchen_types_id = 8;
        $new_dish30->restaurants_id = 16;
        $new_dish30->immage = 'dishes/30-fanta.jpg';
        $new_dish30->description = '33 cl.';
        $new_dish30->view = 1;
        $new_dish30->save();

        $new_dish31 = new Dish();
        $new_dish31->nome_prodotto = 'Sprite';
        $new_dish31->prezzo = 3;
        $new_dish31->vegetariano = 1;
        $new_dish31->glutine = 1;
        $new_dish31->kitchen_types_id = 8;
        $new_dish31->restaurants_id = 16;
        $new_dish31->immage = 'dishes/31-sprite.jpg';
        $new_dish31->description = '33 cl.';
        $new_dish31->view = 1;
        $new_dish31->save();

        $new_dish32 = new Dish();
        $new_dish32->nome_prodotto = 'Coca Cola Zero';
        $new_dish32->prezzo = 3;
        $new_dish32->vegetariano = 1;
        $new_dish32->glutine = 1;
        $new_dish32->kitchen_types_id = 8;
        $new_dish32->restaurants_id = 16;
        $new_dish32->immage = 'dishes/32-coca-zero.jpg';
        $new_dish32->description = '33 cl.';
        $new_dish32->view = 1;
        $new_dish32->save();

        $new_dish33 = new Dish();
        $new_dish33->nome_prodotto = 'The freddo al limone';
        $new_dish33->prezzo = 3;
        $new_dish33->vegetariano = 1;
        $new_dish33->glutine = 1;
        $new_dish33->kitchen_types_id = 8;
        $new_dish33->restaurants_id = 16;
        $new_dish33->immage = 'dishes/33-the-limone.jpeg';
        $new_dish33->description = '33 cl.';
        $new_dish33->view = 1;
        $new_dish33->save();

        $new_dish34 = new Dish();
        $new_dish34->nome_prodotto = 'The freddo alla pesca';
        $new_dish34->prezzo = 3;
        $new_dish34->vegetariano = 1;
        $new_dish34->glutine = 1;
        $new_dish34->kitchen_types_id = 8;
        $new_dish34->restaurants_id = 16;
        $new_dish34->immage = 'dishes/34-the-pesca.jpg';
        $new_dish34->description = '33 cl.';
        $new_dish34->view = 1;
        $new_dish34->save();

        $new_dish35 = new Dish();
        $new_dish35->nome_prodotto = 'Chinotto Lurisia';
        $new_dish35->prezzo = 3;
        $new_dish35->vegetariano = 1;
        $new_dish35->glutine = 1;
        $new_dish35->kitchen_types_id = 8;
        $new_dish35->restaurants_id = 16;
        $new_dish35->immage = 'dishes/35-chinotto-lurisia.jpeg';
        $new_dish35->description = '33 cl.';
        $new_dish35->view = 1;
        $new_dish35->save();



        // Birre e vini
        $new_dish36 = new Dish();
        $new_dish36->nome_prodotto = 'Nastro Azzurro';
        $new_dish36->prezzo = 6;
        $new_dish36->vegetariano = 1;
        $new_dish36->glutine = 1;
        $new_dish36->kitchen_types_id = 8;
        $new_dish36->restaurants_id = 16;
        $new_dish36->immage = 'dishes/36-nastro-azzurro.jpeg';
        $new_dish36->description = '(Italia Lager di Qualità Superiore con esclusivo Mais Nostrano)50 cl.';
        $new_dish36->view = 1;
        $new_dish36->save();

        $new_dish37 = new Dish();
        $new_dish37->nome_prodotto = 'Peroni Doppio Malto';
        $new_dish37->prezzo = 7;
        $new_dish37->vegetariano = 1;
        $new_dish37->glutine = 1;
        $new_dish37->kitchen_types_id = 8;
        $new_dish37->restaurants_id = 16;
        $new_dish37->immage = 'dishes/37-birra-peroni-doppio-malto.png';
        $new_dish37->description = '50 cl.';
        $new_dish37->view = 1;
        $new_dish37->save();

        $new_dish38 = new Dish();
        $new_dish38->nome_prodotto = 'Sorbillo Nazionale Baladin';
        $new_dish38->prezzo = 7;
        $new_dish38->vegetariano = 1;
        $new_dish38->glutine = 1;
        $new_dish38->kitchen_types_id = 8;
        $new_dish38->restaurants_id = 16;
        $new_dish38->immage = 'dishes/38-sorbillo-baladin.jpg';
        $new_dish38->description = '(100% Italiana ottenuta da materie prime nazionali)33 cl.';
        $new_dish38->view = 1;
        $new_dish38->save();
            //ristorante id 1
        $new_dish_id1 = new Dish();
        $new_dish_id1->nome_prodotto = 'Spaghetti Ai Frutti Di Mare';
        $new_dish_id1->prezzo = 9;
        $new_dish_id1->vegetariano = 0;
        $new_dish_id1->glutine = 1;
        $new_dish_id1->kitchen_types_id = 2;
        $new_dish_id1->restaurants_id = 1;
        $new_dish_id1->immage = 'dishes/spaghetti-ai-frutti-di-mare.jpg';
        $new_dish_id1->description = 'Spaghetti Ai Frutti Di Mare Freschi';
        $new_dish_id1-> view = 1;
        $new_dish_id1->save();
            //ristorante id 2
        $new_dish_id2 = new Dish();
        $new_dish_id2->nome_prodotto = 'Pizza Diavola';
        $new_dish_id2->prezzo = 9;
        $new_dish_id2->vegetariano = 0;
        $new_dish_id2->glutine = 1;
        $new_dish_id2->kitchen_types_id = 5;
        $new_dish_id2->restaurants_id = 2;
        $new_dish_id2->immage = 'dishes/12-pizza-diavola.jpg';
        $new_dish_id2->description = 'Fior di latte, salame piccante pomodori e peperoncino';
        $new_dish_id2-> view = 1;
        $new_dish_id2->save();
            //ristorante id 3
        $new_dish_id3 = new Dish();
        $new_dish_id3->nome_prodotto = 'Spaghetti Ai Frutti Di Mare';
        $new_dish_id3->prezzo = 9;
        $new_dish_id3->vegetariano = 0;
        $new_dish_id3->glutine = 1;
        $new_dish_id3->kitchen_types_id = 2;
        $new_dish_id3->restaurants_id = 3;
        $new_dish_id3->immage = 'dishes/spaghetti-ai-frutti-di-mare.jpg';
        $new_dish_id3->description = 'Spaghetti Ai Frutti Di Mare Freschi';
        $new_dish_id3-> view = 1;
        $new_dish_id3->save();
        // ristorante id 4
        $new_dish_id4 = new Dish();
        $new_dish_id4->nome_prodotto = 'Spaghetti Ai Frutti Di Mare';
        $new_dish_id4->prezzo = 9;
        $new_dish_id4->vegetariano = 0;
        $new_dish_id4->glutine = 1;
        $new_dish_id4->kitchen_types_id = 2;
        $new_dish_id4->restaurants_id = 4;
        $new_dish_id4->immage = 'dishes/spaghetti-ai-frutti-di-mare.jpg';
        $new_dish_id4->description = 'Spaghetti Ai Frutti Di Mare Freschi';
        $new_dish_id4-> view = 1;
        $new_dish_id4->save();
                // ristorante id 5
        $new_dish_id5 = new Dish();
        $new_dish_id5->nome_prodotto = 'Spaghetti Ai Frutti Di Mare';
        $new_dish_id5->prezzo = 9;
        $new_dish_id5->vegetariano = 0;
        $new_dish_id5->glutine = 1;
        $new_dish_id5->kitchen_types_id = 2;
        $new_dish_id5->restaurants_id = 5;
        $new_dish_id5->immage = 'dishes/spaghetti-ai-frutti-di-mare.jpg';
        $new_dish_id5->description = 'Spaghetti Ai Frutti Di Mare Freschi';
        $new_dish_id5-> view = 1;
        $new_dish_id5->save();
        //ristorante id 6
        $new_dish_id6 = new Dish();
        $new_dish_id6->nome_prodotto = 'Spaghetti Ai Frutti Di Mare';
        $new_dish_id6->prezzo = 9;
        $new_dish_id6->vegetariano = 0;
        $new_dish_id6->glutine = 1;
        $new_dish_id6->kitchen_types_id = 2;
        $new_dish_id6->restaurants_id = 6;
        $new_dish_id6->immage = 'dishes/spaghetti-ai-frutti-di-mare.jpg';
        $new_dish_id6->description = 'Spaghetti Ai Frutti Di Mare Freschi';
        $new_dish_id6-> view = 1;
        $new_dish_id6->save();

        $new_dish_id6_2 = new Dish();
        $new_dish_id6_2->nome_prodotto = 'Pizza Diavola';
        $new_dish_id6_2->prezzo = 9;
        $new_dish_id6_2->vegetariano = 0;
        $new_dish_id6_2->glutine = 1;
        $new_dish_id6_2->kitchen_types_id = 5;
        $new_dish_id6_2->restaurants_id = 6;
        $new_dish_id6_2->immage = 'dishes/12-pizza-diavola.jpg';
        $new_dish_id6_2->description = 'Fior di latte, salame piccante pomodori e peperoncino';
        $new_dish_id6_2-> view = 1;
        $new_dish_id6_2->save();
        //ristorante id 7
        $new_dish_id7 = new Dish();
        $new_dish_id7->nome_prodotto = 'Spaghetti Ai Frutti Di Mare';
        $new_dish_id7->prezzo = 9;
        $new_dish_id7->vegetariano = 0;
        $new_dish_id7->glutine = 1;
        $new_dish_id7->kitchen_types_id = 2;
        $new_dish_id7->restaurants_id = 7;
        $new_dish_id7->immage = 'dishes/spaghetti-ai-frutti-di-mare.jpg';
        $new_dish_id7->description = 'Spaghetti Ai Frutti Di Mare Freschi';
        $new_dish_id7-> view = 1;
        $new_dish_id7->save();
        //ristorante id 8
        $new_dish_id8 = new Dish();
        $new_dish_id8->nome_prodotto = 'Spaghetti Ai Frutti Di Mare';
        $new_dish_id8->prezzo = 9;
        $new_dish_id8->vegetariano = 0;
        $new_dish_id8->glutine = 1;
        $new_dish_id8->kitchen_types_id = 2;
        $new_dish_id8->restaurants_id = 8;
        $new_dish_id8->immage = 'dishes/spaghetti-ai-frutti-di-mare.jpg';
        $new_dish_id8->description = 'Spaghetti Ai Frutti Di Mare Freschi';
        $new_dish_id8-> view = 1;
        $new_dish_id8->save();
        //ristorante id 9
        $new_dish_id9 = new Dish();
        $new_dish_id9->nome_prodotto = 'Spaghetti Ai Frutti Di Mare';
        $new_dish_id9->prezzo = 9;
        $new_dish_id9->vegetariano = 0;
        $new_dish_id9->glutine = 1;
        $new_dish_id9->kitchen_types_id = 2;
        $new_dish_id9->restaurants_id = 9;
        $new_dish_id9->immage = 'dishes/spaghetti-ai-frutti-di-mare.jpg';
        $new_dish_id9->description = 'Spaghetti Ai Frutti Di Mare Freschi';
        $new_dish_id9-> view = 1;
        $new_dish_id9->save();
        //ristorante id 10
        $new_dish_id10 = new Dish();
        $new_dish_id10->nome_prodotto = 'Spaghetti Ai Frutti Di Mare';
        $new_dish_id10->prezzo = 9;
        $new_dish_id10->vegetariano = 0;
        $new_dish_id10->glutine = 1;
        $new_dish_id10->kitchen_types_id = 2;
        $new_dish_id10->restaurants_id = 10;
        $new_dish_id10->immage = 'dishes/spaghetti-ai-frutti-di-mare.jpg';
        $new_dish_id10->description = 'Spaghetti Ai Frutti Di Mare Freschi';
        $new_dish_id10-> view = 1;
        $new_dish_id10->save();

        $new_dish_id10_2 = new Dish();
        $new_dish_id10_2->nome_prodotto = 'Pizza Diavola';
        $new_dish_id10_2->prezzo = 9;
        $new_dish_id10_2->vegetariano = 0;
        $new_dish_id10_2->glutine = 1;
        $new_dish_id10_2->kitchen_types_id = 5;
        $new_dish_id10_2->restaurants_id = 10;
        $new_dish_id10_2->immage = 'dishes/12-pizza-diavola.jpg';
        $new_dish_id10_2->description = 'Fior di latte, salame piccante pomodori e peperoncino';
        $new_dish_id10_2-> view = 1;
        $new_dish_id10_2->save();
        //ristorante id 11
        $new_dish_id11 = new Dish();
        $new_dish_id11->nome_prodotto = 'Pizza Diavola';
        $new_dish_id11->prezzo = 9;
        $new_dish_id11->vegetariano = 0;
        $new_dish_id11->glutine = 1;
        $new_dish_id11->kitchen_types_id = 5;
        $new_dish_id11->restaurants_id = 11;
        $new_dish_id11->immage = 'dishes/12-pizza-diavola.jpg';
        $new_dish_id11->description = 'Fior di latte, salame piccante pomodori e peperoncino';
        $new_dish_id11-> view = 1;
        $new_dish_id11->save();
        //ristorante id 12
        $new_dish_id12 = new Dish();
        $new_dish_id12->nome_prodotto = 'Pizza Diavola';
        $new_dish_id12->prezzo = 9;
        $new_dish_id12->vegetariano = 0;
        $new_dish_id12->glutine = 1;
        $new_dish_id12->kitchen_types_id = 5;
        $new_dish_id12->restaurants_id = 12;
        $new_dish_id12->immage = 'dishes/12-pizza-diavola.jpg';
        $new_dish_id12->description = 'Fior di latte, salame piccante pomodori e peperoncino';
        $new_dish_id12-> view = 1;
        $new_dish_id12->save();
        //ristorante id 13
        $new_dish_id13 = new Dish();
        $new_dish_id13->nome_prodotto = 'Pizza Diavola';
        $new_dish_id13->prezzo = 9;
        $new_dish_id13->vegetariano = 0;
        $new_dish_id13->glutine = 1;
        $new_dish_id13->kitchen_types_id = 5;
        $new_dish_id13->restaurants_id = 13;
        $new_dish_id13->immage = 'dishes/12-pizza-diavola.jpg';
        $new_dish_id13->description = 'Fior di latte, salame piccante pomodori e peperoncino';
        $new_dish_id13-> view = 1;
        $new_dish_id13->save();
        //ristorante id 14
        $new_dish_id14 = new Dish();
        $new_dish_id14->nome_prodotto = 'Pizza Diavola';
        $new_dish_id14->prezzo = 9;
        $new_dish_id14->vegetariano = 0;
        $new_dish_id14->glutine = 1;
        $new_dish_id14->kitchen_types_id = 5;
        $new_dish_id14->restaurants_id = 14;
        $new_dish_id14->immage = 'dishes/12-pizza-diavola.jpg';
        $new_dish_id14->description = 'Fior di latte, salame piccante pomodori e peperoncino';
        $new_dish_id14-> view = 1;
        $new_dish_id14->save();
    }
}

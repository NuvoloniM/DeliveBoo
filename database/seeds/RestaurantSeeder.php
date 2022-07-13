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
        // Lista Ristoranti
        $new_restaurant1 = new Restaurant();
        $new_restaurant1->user_id=1;
        $new_restaurant1->nome_attivita='Archivio Storico';
        $new_restaurant1->indirizzo='Via Alessandro Scarlatti 30';
        $new_restaurant1->immagine = 'restaurants/1-archivio-storico-napoli.jpg';
        $new_restaurant1->save();
        $new_restaurant1->restaurantType()->sync([1]);

        $new_restaurant2 = new Restaurant();
        $new_restaurant2->user_id=1;
        $new_restaurant2->nome_attivita='Michelasso';
        $new_restaurant2->indirizzo='Via Santa Brigida 14/16';
        $new_restaurant2->immagine = 'restaurants/2-ristorante-michelasso.jpg';
        $new_restaurant2->save();
        $new_restaurant2->restaurantType()->sync([1,4]);

        $new_restaurant3 = new Restaurant();
        $new_restaurant3->user_id=1;
        $new_restaurant3->nome_attivita='Opera Restaurant';
        $new_restaurant3->indirizzo='Via Simone Martini 2/4';
        $new_restaurant3->immagine = 'restaurants/3-opera-restaurant.jpg';
        $new_restaurant3->save();
        $new_restaurant3->restaurantType()->sync([1]);

        $new_restaurant4 = new Restaurant();
        $new_restaurant4->user_id=1;
        $new_restaurant4->nome_attivita='Veritas';
        $new_restaurant4->indirizzo='immagine/Corso Vittorio Emanuele 141';
        $new_restaurant4->immagine = 'restaurants/4-veritas.jpg';
        $new_restaurant4->save();
        $new_restaurant4->restaurantType()->sync([1]);

        $new_restaurant5 = new Restaurant();
        $new_restaurant5->user_id=1;
        $new_restaurant5->nome_attivita='Locanda del Cerriglio';
        $new_restaurant5->indirizzo='Via del Cerriglio, 3';
        $new_restaurant5->immagine = 'restaurants/5-locanda-del-cerriglio.jpg';
        $new_restaurant5->save();
        $new_restaurant5->restaurantType()->sync([1]);

        $new_restaurant6 = new Restaurant();
        $new_restaurant6->user_id=2;
        $new_restaurant6->nome_attivita='Albero Dei Visconti';
        $new_restaurant6->indirizzo='Via San Giovanni Maggiore Pignatelli, 52';
        $new_restaurant6->immagine = 'restaurants/6-albero-visconti.jpg';
        $new_restaurant6->save();
        $new_restaurant6->restaurantType()->sync([1,4]);

        $new_restaurant7 = new Restaurant();
        $new_restaurant7->user_id=2;
        $new_restaurant7->nome_attivita='Muu Muuzzarella';
        $new_restaurant7->indirizzo='Vico II Alabardieri, 7';
        $new_restaurant7->immagine = 'restaurants/7-muu-muuzzarella.jpg';
        $new_restaurant7->save();
        $new_restaurant7->restaurantType()->sync([1]);

        $new_restaurant8 = new Restaurant();
        $new_restaurant8->user_id=2;
        $new_restaurant8->nome_attivita='Pescheria lo squalo';
        $new_restaurant8->indirizzo='Via Giustiniano, 273';
        $new_restaurant8->immagine = 'restaurants/8-lo-squalo.jpg';
        $new_restaurant8->save();
        $new_restaurant8->restaurantType()->sync([1]);

        $new_restaurant9 = new Restaurant();
        $new_restaurant9->user_id=2;
        $new_restaurant9->nome_attivita='Zi Teresa';
        $new_restaurant9->indirizzo='Passaggio Castel dell Ovo, 1';
        $new_restaurant9->immagine = 'restaurants/9-zi-teresa.jpg';
        $new_restaurant9->save();
        $new_restaurant9->restaurantType()->sync([1]);

        $new_restaurant10 = new Restaurant();
        $new_restaurant10->user_id=2;
        $new_restaurant10->nome_attivita='Ristorante La Piazzetta';
        $new_restaurant10->indirizzo='Via Nazario Sauro, 21';
        $new_restaurant10->immagine = 'restaurants/10-la piazzetta.jpg';
        $new_restaurant10->save();
        $new_restaurant10->restaurantType()->sync([1,4]);



        // Lista Pizzerie
        $new_restaurant11 = new Restaurant();
        $new_restaurant11->user_id=4;
        $new_restaurant11->nome_attivita='Pizzeria Vincenzo Capuano';
        $new_restaurant11->indirizzo='Piazza Vittoria, 8';
        $new_restaurant11->immagine = 'restaurants/11-capuano.jpg';
        $new_restaurant11->save();
        $new_restaurant11->restaurantType()->sync([4]);

        $new_restaurant12 = new Restaurant();
        $new_restaurant12->user_id=4;
        $new_restaurant12->nome_attivita='50 Kalò';
        $new_restaurant12->indirizzo='Piazza Sannazaro, 201/c';
        $new_restaurant12->immagine = 'restaurants/12-50-kalo.jpg';
        $new_restaurant12->save();
        $new_restaurant12->restaurantType()->sync([4]);

        $new_restaurant13 = new Restaurant();
        $new_restaurant13->user_id=4;
        $new_restaurant13->nome_attivita='Fratelli la Bufala';
        $new_restaurant13->indirizzo='Via Francesco Caracciolo, 10';
        $new_restaurant13->immagine = 'restaurants/13-fratelli-bufala.jpg';
        $new_restaurant13->save();
        $new_restaurant13->restaurantType()->sync([4]);

        $new_restaurant14 = new Restaurant();
        $new_restaurant14->user_id=3;
        $new_restaurant14->nome_attivita='Gino Sorbillo Lievito Madre al Mare';
        $new_restaurant14->indirizzo='Via Partenope, 1';
        $new_restaurant14->immagine = 'restaurants/14-sorbillo-mare.jpg';
        $new_restaurant14->save();
        $new_restaurant14->restaurantType()->sync([4]);

        $new_restaurant15 = new Restaurant();
        $new_restaurant15->user_id=4;
        $new_restaurant15->nome_attivita='Pizzeria Starita a Materdei';
        $new_restaurant15->indirizzo='Via Materdei, 27/28';
        $new_restaurant15->immagine = 'restaurants/15-starita.jpg';
        $new_restaurant15->save();
        $new_restaurant15->restaurantType()->sync([4]);

        $new_restaurant16 = new Restaurant();
        $new_restaurant16->user_id=3;
        $new_restaurant16->nome_attivita='Gino e Toto Sorbillo';
        $new_restaurant16->indirizzo='Via dei Tribunali, 32';
        $new_restaurant16->immagine = 'restaurants/16-sorbillo-centro.jpg';
        $new_restaurant16->save();
        $new_restaurant16->restaurantType()->sync([4]);

        $new_restaurant17 = new Restaurant();
        $new_restaurant17->user_id=4;
        $new_restaurant17->nome_attivita='Pizzeria Di Matteo';
        $new_restaurant17->indirizzo='Via dei Tribunali, 94';
        $new_restaurant17->immagine = 'restaurants/17-pizzeria-di-matteo.jpg';
        $new_restaurant17->save();
        $new_restaurant17->restaurantType()->sync([4]);

        $new_restaurant18 = new Restaurant();
        $new_restaurant18->user_id=4;
        $new_restaurant18->nome_attivita='Antica Pizzeria Da Michele';
        $new_restaurant18->indirizzo='Via Cesare Sersale, 1';
        $new_restaurant18->immagine = 'restaurants/18-da-michele.jpg';
        $new_restaurant18->save();
        $new_restaurant18->restaurantType()->sync([4]);

        $new_restaurant19 = new Restaurant();
        $new_restaurant19->user_id=4;
        $new_restaurant19->nome_attivita='Pizzeria Gaetano Genovesi';
        $new_restaurant19->indirizzo='Via Alessandro Manzoni 26/I';
        $new_restaurant19->immagine = 'restaurants/19-genovesi.jpg';
        $new_restaurant19->save();
        $new_restaurant19->restaurantType()->sync([4]);

        $new_restaurant20 = new Restaurant();
        $new_restaurant20->user_id=4;
        $new_restaurant20->nome_attivita='Pizzeria Porzio';
        $new_restaurant20->indirizzo='Via Cornelia dei Gracchi, 27';
        $new_restaurant20->immagine = 'restaurants/20-pizzeria-porzio.jpg';
        $new_restaurant20->save();
        $new_restaurant20->restaurantType()->sync([4]);



        // Lista Giapponesi
        $new_restaurant21 = new Restaurant();
        $new_restaurant21->user_id=5;
        $new_restaurant21->nome_attivita='Hachi Sushi';
        $new_restaurant21->indirizzo='Via Luca Giordano, 33';
        $new_restaurant21->immagine = 'restaurants/21-hachi.jpg';
        $new_restaurant21->save();
        $new_restaurant21->restaurantType()->sync([2]);

        $new_restaurant22 = new Restaurant();
        $new_restaurant22->user_id=5;
        $new_restaurant22->nome_attivita='Honzen Fusion Japanese';
        $new_restaurant22->indirizzo='Via Alessandro Manzoni, 126';
        $new_restaurant22->immagine = 'restaurants/22-honzen.jpg';
        $new_restaurant22->save();
        $new_restaurant22->restaurantType()->sync([2]);

        $new_restaurant23 = new Restaurant();
        $new_restaurant23->user_id=5;
        $new_restaurant23->nome_attivita='O Sushi';
        $new_restaurant23->indirizzo='Via Francesco Cilea, 203/207';
        $new_restaurant23->immagine = 'restaurants/23-osushi.jpg';
        $new_restaurant23->save();
        $new_restaurant23->restaurantType()->sync([2]);

        $new_restaurant24 = new Restaurant();
        $new_restaurant24->user_id=5;
        $new_restaurant24->nome_attivita='Reiwa Sushi';
        $new_restaurant24->indirizzo='Via Michelangelo Schipa, 40';
        $new_restaurant24->immagine = 'restaurants/24-reiwa.jpg';
        $new_restaurant24->save();
        $new_restaurant24->restaurantType()->sync([2]);

        $new_restaurant25 = new Restaurant();
        $new_restaurant25->user_id=5;
        $new_restaurant25->nome_attivita='Jorudan Sushi';
        $new_restaurant25->indirizzo='Via Tasso, 288';
        $new_restaurant25->immagine = 'restaurants/25-jorudan.jpg';
        $new_restaurant25->save();
        $new_restaurant25->restaurantType()->sync([2]);

        $new_restaurant26 = new Restaurant();
        $new_restaurant26->user_id=5;
        $new_restaurant26->nome_attivita='Nori Sushi Bar';
        $new_restaurant26->indirizzo='Piazza dell’immacolata, 1';
        $new_restaurant26->immagine = 'restaurants/26-nori.jpg';
        $new_restaurant26->save();
        $new_restaurant26->restaurantType()->sync([2]);

        $new_restaurant27 = new Restaurant();
        $new_restaurant27->user_id=5;
        $new_restaurant27->nome_attivita='Yao Sushi';
        $new_restaurant27->indirizzo='Via Posillipo, 319';
        $new_restaurant27->immagine = 'restaurants/27-yao.jpg';
        $new_restaurant27->save();
        $new_restaurant27->restaurantType()->sync([2]);

        $new_restaurant28 = new Restaurant();
        $new_restaurant28->user_id=5;
        $new_restaurant28->nome_attivita='Marshal Sushi';
        $new_restaurant28->indirizzo='Riviera di Chiaia, 268/269';
        $new_restaurant28->immagine = 'restaurants/28-marshal.jpg';
        $new_restaurant28->save();
        $new_restaurant28->restaurantType()->sync([2]);

        $new_restaurant29 = new Restaurant();
        $new_restaurant29->user_id=5;
        $new_restaurant29->nome_attivita='Konoha Sushi';
        $new_restaurant29->indirizzo='Via Aniello Falcone, 163';
        $new_restaurant29->immagine = 'restaurants/29-konoha.jpg';
        $new_restaurant29->save();
        $new_restaurant29->restaurantType()->sync([2]);

        $new_restaurant30 = new Restaurant();
        $new_restaurant30->user_id=5;
        $new_restaurant30->nome_attivita='Koi Sushi';
        $new_restaurant30->indirizzo='Via Monteoliveto, 35';
        $new_restaurant30->immagine = 'restaurants/30-koi.jpg';
        $new_restaurant30->save();
        $new_restaurant30->restaurantType()->sync([2]);



        // Lista Kebabari
        $new_restaurant31 = new Restaurant();
        $new_restaurant31->user_id=6;
        $new_restaurant31->nome_attivita='Ghi Rice';
        $new_restaurant31->indirizzo='Via Umberto Giordano, 10';
        $new_restaurant31->immagine = 'restaurants/31-ghi-rice.jpg';
        $new_restaurant31->save();
        $new_restaurant31->restaurantType()->sync([3,7]);

        $new_restaurant32 = new Restaurant();
        $new_restaurant32->user_id=6;
        $new_restaurant32->nome_attivita='Taj Mahal';
        $new_restaurant32->indirizzo='Via San Giacomo, 25';
        $new_restaurant32->immagine = 'restaurants/32-taj-mahal.jpg';
        $new_restaurant32->save();
        $new_restaurant32->restaurantType()->sync([7]);

        $new_restaurant33 = new Restaurant();
        $new_restaurant33->user_id=6;
        $new_restaurant33->nome_attivita='Mughal-e-Azam';
        $new_restaurant33->indirizzo='Via Miguel Cervantes de Savaedra, 70-72';
        $new_restaurant33->immagine = 'restaurants/33-mughal.jpg';
        $new_restaurant33->save();
        $new_restaurant33->restaurantType()->sync([7]);

        $new_restaurant34 = new Restaurant();
        $new_restaurant34->user_id=6;
        $new_restaurant34->nome_attivita='Istanbul Doner Kebab';
        $new_restaurant34->indirizzo='Piazza Giuseppe Garibaldi, 38/113';
        $new_restaurant34->immagine = 'restaurants/34-istanbul-kebab.jpg';
        $new_restaurant34->save();
        $new_restaurant34->restaurantType()->sync([3]);

        $new_restaurant35 = new Restaurant();
        $new_restaurant35->user_id=6;
        $new_restaurant35->nome_attivita='Best Kebab';
        $new_restaurant35->indirizzo='Via Sant Anna Dei Lombardi, 25';
        $new_restaurant35->immagine = 'restaurants/35-best-kebab.jpg';
        $new_restaurant35->save();
        $new_restaurant35->restaurantType()->sync([3]);

        $new_restaurant36 = new Restaurant();
        $new_restaurant36->user_id=6;
        $new_restaurant36->nome_attivita='Sharm El Sheik Kebab';
        $new_restaurant36->indirizzo='Piazza Giuseppe Garibaldi, 76';
        $new_restaurant36->immagine = 'restaurants/36-sharm.jpg';
        $new_restaurant36->save();
        $new_restaurant36->restaurantType()->sync([3,7]);

        $new_restaurant37 = new Restaurant();
        $new_restaurant37->user_id=6;
        $new_restaurant37->nome_attivita='Alì kebab';
        $new_restaurant37->indirizzo='Via Chiaia, 456';
        $new_restaurant37->immagine = 'restaurants/37-ali.jpg';
        $new_restaurant37->save();
        $new_restaurant37->restaurantType()->sync([3]);



        // Lista Gelaterie
        $new_restaurant41 = new Restaurant();
        $new_restaurant41->user_id=7;
        $new_restaurant41->nome_attivita='Lello delle Granite';
        $new_restaurant41->indirizzo='Via Casanova, 10';
        $new_restaurant41->immagine = 'restaurants/41-lello-granite.jpg';
        $new_restaurant41->save();
        $new_restaurant41->restaurantType()->sync([5]);

        $new_restaurant42 = new Restaurant();
        $new_restaurant42->user_id=7;
        $new_restaurant42->nome_attivita='Gelateria Valenti';
        $new_restaurant42->indirizzo='Via Dei Tribunali, 53';
        $new_restaurant42->immagine = 'restaurants/42-valenti.jpg';
        $new_restaurant42->save();
        $new_restaurant42->restaurantType()->sync([5]);

        $new_restaurant43 = new Restaurant();
        $new_restaurant43->user_id=7;
        $new_restaurant43->nome_attivita='Poppella Pasticceria';
        $new_restaurant43->indirizzo='Via Arena della Sanita, 24';
        $new_restaurant43->immagine = 'restaurants/43-poppella.jpg';
        $new_restaurant43->save();
        $new_restaurant43->restaurantType()->sync([5]);

        $new_restaurant44 = new Restaurant();
        $new_restaurant44->user_id=7;
        $new_restaurant44->nome_attivita='Mennella Il Gelato';
        $new_restaurant44->indirizzo='Via Toledo, 42';
        $new_restaurant44->immagine = 'restaurants/44-mennella.jpg';
        $new_restaurant44->save();
        $new_restaurant44->restaurantType()->sync([5]);

        $new_restaurant45 = new Restaurant();
        $new_restaurant45->user_id=7;
        $new_restaurant45->nome_attivita='Gay Odin';
        $new_restaurant45->indirizzo='Via Vetriera, 12';
        $new_restaurant45->immagine = 'restaurants/45-gay-odin.jpg';
        $new_restaurant45->save();
        $new_restaurant45->restaurantType()->sync([5]);

        $new_restaurant46 = new Restaurant();
        $new_restaurant46->user_id=7;
        $new_restaurant46->nome_attivita='Casa Infante';
        $new_restaurant46->indirizzo='Via Toledo, 258';
        $new_restaurant46->immagine = 'restaurants/46-infante.jpg';
        $new_restaurant46->save();
        $new_restaurant46->restaurantType()->sync([5]);

        $new_restaurant47 = new Restaurant();
        $new_restaurant47->user_id=7;
        $new_restaurant47->nome_attivita='Birdy’s Bakery';
        $new_restaurant47->indirizzo='Vico Belledonne A Chiaia, 14A/B';
        $new_restaurant47->immagine = 'restaurants/47-birdys-bakery.jpg';
        $new_restaurant47->save();
        $new_restaurant47->restaurantType()->sync([5]);

        $new_restaurant48 = new Restaurant();
        $new_restaurant48->user_id=7;
        $new_restaurant48->nome_attivita='Leopoldo';
        $new_restaurant48->indirizzo='Via Chiaia, 258/259';
        $new_restaurant48->immagine = 'restaurants/48-leopoldo.jpg';
        $new_restaurant48->save();
        $new_restaurant48->restaurantType()->sync([5]);

        $new_restaurant49 = new Restaurant();
        $new_restaurant49->user_id=7;
        $new_restaurant49->nome_attivita='Gelatosità';
        $new_restaurant49->indirizzo='Via Mario Fiore, 2';
        $new_restaurant49->immagine = 'restaurants/49-gelatosità.jpg';
        $new_restaurant49->save();
        $new_restaurant49->restaurantType()->sync([5]);

        $new_restaurant50 = new Restaurant();
        $new_restaurant50->user_id=7;
        $new_restaurant50->nome_attivita='Pasticceria Capparelli';
        $new_restaurant50->indirizzo='Via Dei Tribunali, 327';
        $new_restaurant50->immagine = 'restaurants/50-capparelli.jpg';
        $new_restaurant50->save();
        $new_restaurant50->restaurantType()->sync([5]);

    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\KitchenType;
class KitchenTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kitchen_type = [
            'Antipasto', 'Primo', 'Secondo', 'Contorno', 'Pizza', 'Sushi', 'Dolce', 'Bibita', 'Vino',
        ];

        foreach($kitchen_type as $type){
            $new_type = new KitchenType();
            $new_type->label = $type;
            $new_type->save();
        }
    }
}

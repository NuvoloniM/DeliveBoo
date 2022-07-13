<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

  protected $fillable = [
    'indirizzo', 'data_ordine', 'nome', 'cognome', 'prezzo_totale', 'recapito' ,'restaurant_id'
  ];

    public function dish() {
        return $this->belongsToMany('App\Models\Dish');
      }
      public function restaurant(){
        return $this->belongsTo('App\Models\Restaurant');
    }
}

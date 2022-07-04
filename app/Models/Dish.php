<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'nome_prodotto', 'prezzo', 'immage', 'restaurants_id', 'kitchen_types_id', 'vegetariano', 'glutine', 'view', 'description'
    ];
    public function order() {
        return $this->belongsToMany('App\Models\Order');
      }
    public function kitchenType(){
        return $this->belongsTo('App\Models\KitchenType');
    }
    public function restaurants(){
        return $this->belongsTo('App\Models\Restaurant');
    }
}

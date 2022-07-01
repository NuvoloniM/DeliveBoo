<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'nome_attivita', 'indirizzo', 'immagine', 'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function restaurantDish(){
        return $this->hasOne('App\Models\Dish');
    }
    public function restaurantType(){
        return $this->belongsToMany('App\Models\RestaurantType');
    }
    public function order(){
        return $this->hasMany('App\Models\Order');
    }
}

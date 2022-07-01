<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
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

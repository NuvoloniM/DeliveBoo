<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function dish() {
        return $this->belongsToMany('App\Models\Dish');
      }
      public function restaurant(){
        return $this->belongsTo('App\Models\Restaurant');
    }
}

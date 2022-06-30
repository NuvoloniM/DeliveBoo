<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KitchenType extends Model
{
    //
    public function dish(){
        return $this->hasMany('App\Models\Dish');
    }
}

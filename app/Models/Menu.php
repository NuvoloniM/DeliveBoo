<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    public function kitchenType(){
        return $this->belongsTo('App\Models\KitchenType');
    }
    public function restaurant(){
        return $this->belongsTo('App\Models\Restaurant');
    }
}

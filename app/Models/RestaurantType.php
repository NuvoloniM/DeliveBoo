<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RestaurantType extends Model
{
    public function restaurant(){
        return $this->belongsToMany('App\Models\Restaurant');
    }
}
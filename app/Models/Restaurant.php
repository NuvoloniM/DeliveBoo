<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restauran extends Model
{
    //

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function restaurantMenu(){
        return $this->hasOne('App\Models\Menu');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KitchenType extends Model
{
    //
    public function menu(){
        return $this->hasMany('App\Models\Menu');
    }
}

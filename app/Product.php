<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';


    public function carts()
    {
        return $this->belongsToMany('App\Cart');
    }

}

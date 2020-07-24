<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProducts extends Model
{
    protected $table = 'cart_product';

    protected $fillable = [
        'product_id', 'cart_id', 'quantity',
    ];
}

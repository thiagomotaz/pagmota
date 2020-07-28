<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'users_address';

    protected $fillable = [
        'street', 'number', 'neighborhood', 'city', 'state', 'user_id'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

    public static function getProductsType()
    {
        return ['appetizer', 'first', 'second', 'salad', 'dessert'];
    }
}

// vim: set ts=4 sw=4 :

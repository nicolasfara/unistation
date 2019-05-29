<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function vendors()
    {
        return $this->belongsTo('App\Vendor');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order', 'order_product')->withPivot('quantity');
    }

    public static function getProductsType()
    {
        return ['appetizer', 'first', 'second', 'salad', 'dessert', 'drink'];
    }
}

// vim: set ts=4 sw=4 :

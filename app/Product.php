<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order', 'order_product')->withPivot('quantity');
    }

    public static function getProductsType()
    {
        return ['appetizer', 'first', 'second', 'salad', 'dessert'];
    }
}

// vim: set ts=4 sw=4 :

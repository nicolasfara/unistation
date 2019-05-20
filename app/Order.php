<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function products()
    {
        return $this->belongsToMany('App\Product', 'order_product')->withPivot('quantity');
    }
}

// vim: set ts=4 sw=4 :

<?php
/**
 * Short description for OrderProduct.php
 *
 * @package OrderProduct
 * @author nicolasfara <nicolas.farabegoli@gmail.com>
 * @version 0.1
 * @copyright (C) 2019 nicolasfara <nicolas.farabegoli@gmail.com>
 * @license MIT
 */

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderProduct extends Pivot
{
    protected $table = 'order_product';
}

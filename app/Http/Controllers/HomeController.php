<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Order;
use App\Product;
use App\Vendor;

class HomeController extends Controller
{
    //
    public function __construct()
    {

    }

    public function showHome()
    {
        $clients = Client::all()->count();
        $orders = Order::all()->count();
        $products = Product::all()->count();
        $vendors = Vendor::all()->count();
        return view('welcome', ['products_count' => $products, 'vendors_count' => $vendors, 'orders_count' => $orders, 'clients_count' => $clients]);
    }
}


// vim: set ts=4 sw=4 :

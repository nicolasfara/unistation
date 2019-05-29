<?php

use App\Product;
use App\Vendor;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('client')->user();

    //dd($users);
    $types = Product::getProductsType();
    $products = Product::all();
    $vendors = Vendor::all();

    return view('client.home', ['types' => $types, 'products' => $products, 'vendors' => $vendors ]);
})->name('home');


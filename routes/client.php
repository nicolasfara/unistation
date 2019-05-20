<?php

use App\Product;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('client')->user();

    //dd($users);
    $types = Product::getProductsType();
    $products = Product::all();

    return view('client.home', ['types' => $types, 'products' => $products]);
})->name('home');


<?php

use App\Product;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('vendor')->user();

    //dd($users);
    $types = Product::getProductsType();
    $products = Product::where('vendor_id', Auth::id())->get();

    return view('vendor.home', ['types' => $types, 'products' => $products]);
})->name('home');


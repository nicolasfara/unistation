<?php

use App\Product;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('vendor')->user();

    //dd($users);
    $types = Product::getProductsType();

    return view('vendor.home', ['types' => $types]);
})->name('home');


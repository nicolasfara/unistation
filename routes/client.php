<?php

use App\Product;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('client')->user();

    //dd($users);
    $types = Product::getProductsType();
    $products = Product::all();

    //Pusher::trigger('unistation-development', 'ordermade', 'hello world');
    event(new App\Events\OrderMade('Someone'));

    return view('client.home', ['types' => $types, 'products' => $products]);
})->name('home');


<?php

use App\Product;
use App\Order;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('vendor')->user();

    //dd($users);
    $types = Product::getProductsType();
    $products = Product::where('vendor_id', Auth::id())->get();
    $orders = Order::where('vendor_id', Auth::id())->get();
    $img = 'https://s3-eu-west-1.amazonaws.com/unistation/' . str_replace('storage/', '', Auth::user()->image);

    return view('vendor.home', ['types' => $types, 'products' => $products, 'orders' => $orders, 'img' => $img]);
})->name('home');


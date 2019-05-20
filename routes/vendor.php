<?php

use App\Product;
use App\Order;
use App\Vendor;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('vendor')->user();

    //dd($users);
    $types = Product::getProductsType();
    $products = Product::where('vendor_id', Auth::id())->get();
    $orders = Vendor::find(Auth::id())->orders()->orderBy('order_created_at', 'desc')->get();
    $avail_prod = Product::where('vendor_id', Auth::id())->pluck('id')->toArray();
    $new_order_count = Vendor::find(Auth::id())->orders()->where('delivered', false)->get()->count();
    $img = 'https://s3-eu-west-1.amazonaws.com/unistation/' . str_replace('storage/', '', Auth::user()->image);

    return view('vendor.home', ['types' => $types, 'products' => $products, 'orders' => $orders, 'img' => $img, 'avail_prod' => $avail_prod, 'new_order_count' => $new_order_count]);
})->name('home');


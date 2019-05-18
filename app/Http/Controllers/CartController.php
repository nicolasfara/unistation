<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use Log;

class CartController extends Controller
{
    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }

    public $redirectTo = '/client/cart';

    public function __construct() {
        //$this->middleware('client.guest', ['except' => 'logout']);
        $this->middleware('auth:client');
    }

    public function showCart() {
        $cart_content = Cart::session(Auth::id())->getContent();
        Log::debug($cart_content);
        return view('client.cart', ['cart_content' => $cart_content]);
    }

    public function addToCart() {
        Cart::session(Auth::id());
        $product = Product::find(Input::get('product_id'));
        Cart::add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array()
        ));
        Log::debug('Element succesfully add to cart');
        Log::debug(Cart::getContent());
        //return response(Cart::Session(Auth::id)->getTotalQuantity(), 200)->header('Content-Type', 'text/plain');
        $cart_qty = Cart::session(Auth::id())->getTotalQuantity();
        return response()->json([
            'cart_qty' => $cart_qty,
        ]);
    }

    public function removeFromCart() {
        Cart::session(Auth::id())->remove(Input::get('product_id'));
        return response(Cart::Session(Auth::id)->getTotalQuantity(), 200)->header('Content-Type', 'text/plain');
    }
}

// vim: set ts=4 sw=4 :

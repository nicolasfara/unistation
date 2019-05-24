<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\OrderMade;
use App\Http\Controllers\Controller;
use App\Product;
use Cart;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use Log;
use App\Order;
use Illuminate\Support\Facades\Input;

class PaymentController extends Controller
{
     use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }

    public $redirectTo = '/client/payment';

    public function __construct() {
        //$this->middleware('client.guest', ['except' => 'logout']);
        $this->middleware('auth:client');
    }

    private function getVendorsFromCart($cart_content) {
        $vendors = array();
        foreach($cart_content as $elem) {
            array_push($vendors, Product::find($elem->id)->vendor_id);
        }
        return array_unique($vendors);
    }

    public function showPayment() {
        return view('client.payment');
    }

    public function sendPayment(Request $request) {
        Log::debug("Payment");
        $cart_content = Cart::session(Auth::id())->getContent();

        $date = Carbon::createFromFormat('d-m-Y H:m', $request->input('date') . ' ' . $request->input('time'));

        $new_order = new Order();
        $new_order->client_id = Auth::id();
        $new_order->delivered = false;
        $new_order->order_created_at = Carbon::now('Europe/Rome');
        $new_order->delivery_info = Carbon::create($date->year, $date->month, $date->day, $date->hour, $date->minute, 00, 'Europe/Rome');
        //                                         Y     M   D   H   M   S    TZ
        $new_order->total = Cart::session(Auth::id())->getTotal();
        $new_order->save();

        $products = array();
        foreach($cart_content as $elem) {
            array_push($products, ['product_id' => $elem->id, 'quantity' => $elem->quantity]);
        }

        $new_order->products()->attach($products);
        $new_order->vendors()->attach($this->getVendorsFromCart($cart_content));

        $data = array(
            'vendors' => $this->getVendorsFromCart($cart_content),
        );
        $json_data = json_encode($data);
        event(new OrderMade($json_data));

        Cart::session(Auth::id())->clear();

        return redirect()->route('client.home');
    }
}


// vim: set ts=4 sw=4 :

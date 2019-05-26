<?php

namespace App\Http\Controllers;

use App\Client;
use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mail;
use Log;

class DeliveryController extends Controller
{
    public $redirectTo = '/client/payment';

    public function __construct() {
        //$this->middleware('client.guest', ['except' => 'logout']);
        $this->middleware('auth:vendor');
    }

    public function sendNotificationOnDelivery() {
        Log::debug('mail enter');
        $order_id = Input::get('order_id');
        $order_query = Order::find($order_id);
        $order_query->delivered = true;
        $order_query->save();

        Log::debug("saved");
        $client = Client::find($order_query->client_id);

        Log::debug($client);
        Mail::to($client)->send(new OrderShipped($order_query));
        Log::debug('mail sent?');
        return response()->json([
            'order' => 'ok', //TODO: do a better response
        ]);
    }
}


// vim: set ts=4 sw=4 :

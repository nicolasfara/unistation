<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use App\Client;
use App\Order;

class ClientOrdersController extends Controller
{
    //
    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }

    public $redirectTo = '/client/orders';

    public function __construct() {
        //$this->middleware('client.guest', ['except' => 'logout']);
        $this->middleware('auth:client');
    }

    public function showClientOrders() {
        $orders = Client::find(Auth::id())->orders()->orderBy('order_created_at', 'desc')->get();
        return view('client.orders', ['orders' => $orders]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        
        if (!empty($order)) {
          $order->feedback = true;
          $order->save();
        }

        return $this->showClientOrders();
    }
}
// vim: set ts=4 sw=4 :

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use App\Client;

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
}


// vim: set ts=4 sw=4 :

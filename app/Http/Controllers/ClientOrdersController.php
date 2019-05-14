<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;

class ClientOrdersController extends Controller
{
    //
    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }

    public $redirectTo = '/client/clientorders';

    public function __construct() {
        //$this->middleware('client.guest', ['except' => 'logout']);
        $this->middleware('auth:client');
    }

    public function showClientOrders() {
        return view('client.clientorders');
    }
}


// vim: set ts=4 sw=4 :
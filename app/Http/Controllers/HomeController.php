<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Merchant;
use App\Cart;
use App\User;
use App\Order;
use Session;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProfile() {
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('/home', ['orders' => $orders]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;

class OrderController extends Controller
{
    public function store(Request $request){

        $products = Cart::content();
        DB::table('orders')->insert(
            [ 
                'user_id' => \Auth::id(),
                'order_details' => $products->toJson(),
                'pay_method' => $request->pay_method,
                'total' => Cart::total()
            ]
        );

        return view('order.waiting');

        
        Cart::destroy();

    }
    public function index(){
        $orders = DB::table('orders')->get();

        return view('Orders.index', ['orders' => $orders]);
    }



}

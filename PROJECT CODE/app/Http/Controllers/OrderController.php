<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;

class OrderController extends Controller
{
    public function store(Request $request){


        $data = DB::table('orders')->insert(
            [ 
                'user_id' => \Auth::id(),
                'pay_method' => $request->pay_method,
                'total' => Cart::total()
            ]
        );

        $id = DB::getPdo()->lastInsertId();;

        foreach(Cart::content() as $item){
            DB::table('order_medicines')->insert(
                [
                    'order_id' => $id,
                    'med_id' => $item->id,
                    'quantity' => $item->qty
                ]);
        };

        Cart::destroy();


        return view('order.waiting');

        

    }
    public function index(){
        $orders = DB::table('orders')->get('order_details');
        foreach ($orders as $item) {
                dd($item);
        }

        //return view('order.index', ['orders' => $orders]);
    }



}

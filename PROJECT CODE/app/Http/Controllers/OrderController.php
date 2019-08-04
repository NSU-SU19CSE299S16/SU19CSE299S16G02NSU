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

        $total = Cart::total();
        $order_id = $id;

        Cart::destroy();


        return view('order.waiting',
        [
            'order_id' => $order_id, 
            'total' => $total
        ]);

        

    }


    public function index(){
        $order_medicines = DB::table('orders')
            ->join('order_medicines', 'orders.order_id', '=', 'order_medicines.order_id')
            ->join('medicines', 'medicines.med_id', '=', 'order_medicines.med_id')
            ->select('medicines.med_price',  'medicines.med_name', 'medicines.med_id', 'orders.user_id', 'orders.total', 'orders.order_id')
            ->where('user_id' , \Auth::id())
            ->get();
        $orders = DB::table('orders')->get();    
        // dd($orders);

        return view('order.index', ['orders' => $orders, 'order_medicines' => $order_medicines]);
    }

    public function check_pay(Request $request){
        $transaction_id = $request->transaction_id;
        //strcmp is php built-in function which compares two strings
        $payments_received = DB::table('payments_received')->get();
        $match = false;
        foreach ($payments_received as $pr){
            if(strcmp($pr->transaction_id, $transaction_id) == 0){
                $match = true;
                break;
            }   
        }
        if($match == false){
            return redirect()->route('order.waiting')->with('error', 'Transaction ID does not match. Please try again.');
        }
        else{
            DB::table('payments_completed')->insert(
                [
                    'order_id' => $request->order_id,
                    'amount' => $request->total,
                    'bkash_t_id' => $transaction_id,
                    'created_at' => date('Y-m-d H:i:s')

                ]);

            DB::table('payments_received')->where('transaction_id', $transaction_id)->delete();

            return redirect()->route('medicine.index')->with('success', 'Payment received!');
        }
    }



}

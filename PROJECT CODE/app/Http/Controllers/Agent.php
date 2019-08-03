<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Agent extends Controller
{
    public function index()
    {
        return view('agentsimulator.index');
    }

    public function paid(Request $request)
    {
        $amount = $request->amount;
        $transaction_id = Str::random(16);
        DB::table('bkash_agent')->insert(
            [ 
                'amount' => $amount,
                'transaction_id' => $transaction_id
            ]
        );

        DB::table('payments_received')->insert(
            [ 
                'amount' => $amount,
                'transaction_id' => $transaction_id
            ]
        );

    }
}

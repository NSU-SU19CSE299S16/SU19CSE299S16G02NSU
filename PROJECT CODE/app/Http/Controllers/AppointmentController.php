<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AppointmentController extends Controller
{
    public function store(Request $request){

    $data = DB::table('appointments')->insert(
        [ 
            'user_id' => \Auth::id(),
            'pay_method' =>  $request->pay_method,
            'total' => Cart::total(),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->route('doctor.doctors')->with('success', 'Appointment Successfully Requested. You will be notified after confirmation.');

    }
   
}

<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MedicineController extends Controller
{

    //show all medicines
    public function index(){

        $medicines = DB::table('medicines')->get();

        return view('medicine.medicines', ['medicines' => $medicines]);
    }

    //show a specific medicine
    public function show($id){
        $medicine = DB::table('medicines')->where('med_id', $id)->first();
        return view('medicine.medicine', ['medicine' => $medicine]);
    }

   
}

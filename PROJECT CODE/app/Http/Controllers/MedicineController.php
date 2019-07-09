<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index(){

        $medicines = DB::table('medicines')->get();

        return view('medicine.medicines', ['medicines' => $medicines]);
    }

    public function show($id){

        echo $id;
    }

   
}

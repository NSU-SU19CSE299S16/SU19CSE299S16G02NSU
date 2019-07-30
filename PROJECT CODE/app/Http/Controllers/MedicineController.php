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


    //show the add medicine form

    public function create(){
    
        return view('admin.medicine.addmedicine');

    }

    //store a row into the database

    public function store(Request $request){

        DB::table('medicines')->insert(
            [
                'med_name' => $request->name,
                'med_stock' => $request->stock
            
            ]
        );

        return redirect()->route('admin.medicine');

    }

    public function edit($id){
        $medicine = DB::table('medicines')->where('med_id', $id)->first();
        return view('medicine.medicine', ['medicine' => $medicine]);
    }
    
    public function destroy($id){

        DB::table('medicines')->where('med_id', $id)->delete();
        
    }


    //show a specific medicine
    public function show($id){
        $medicine = DB::table('medicines')->where('med_id', $id)->first();
        return view('medicine.medicine', ['medicine' => $medicine]);
    }

    //show all medicine (admin panel)
    public function adminIndex(){
        $medicines = DB::table('medicines')->get();

        return view('admin.medicine.medicines', ['medicines' => $medicines]);
    }

   
}

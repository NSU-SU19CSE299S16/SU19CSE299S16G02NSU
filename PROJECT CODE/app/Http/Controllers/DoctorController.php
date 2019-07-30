<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DoctorController extends Controller
{

    //show all doctors
    public function index(){
        $doctors = DB::table('doctors')->get();
        return view('doctor.doctors', ['doctor' => $doctors]);
    
    }

    //show a specific doctor
    public function show($id){
        $doctor = DB::table('doctors')->where('doc_id', $id)->first();
        return view('doctor.doctors', ['doctor' => $doctor]);
    
    }
    
    //show all doctor (admin panel)
    public function adminIndex(){    
        $doctors = DB::table('doctors')->get();
        return view('admin.doctor.doctors', ['doctors' => $doctors]);
    
    }

    //show the add doctor form

    public function create(){
    
        return view('admin.doctor.adddoctor');

    }

    //store a row into the database

    public function store(Request $request){
        
        DB::table('doctors')->insert(
            [ 
                'doc_name' => $request->name,
                'doc_spec' => $request->spec
            ]
        );

        return redirect()->route('admin.doctors');
    }

    //Edit 
    public function edit($id){
        $doctor = DB::table('doctors')->where('doc_id', $id)->first();
        return view('admin.doctor.edit', ['doctor' => $doctor]);
    }

    //delete
    public function destroy($id){

        DB::table('doctors')->where('doc_id', $id)->delete();
        
    }

    public function update($id, Request $request){
        DB::table('doctors')
            ->where('doc_id', $id)

    }





    
}



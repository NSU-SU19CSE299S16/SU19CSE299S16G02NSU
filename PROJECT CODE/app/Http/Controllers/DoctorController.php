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


    
}



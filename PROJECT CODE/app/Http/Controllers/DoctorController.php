<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    
    
    public function about(){
        return view('admin.about');
    }
    
    public function services(){
        return view('admin.services');
    }

    //show all doctors
    public function index(){
        $doctors = DB::table('doctors')->get();

        return view('doctor.doctors', ['doctor' => $doctors]);
    

    }

    //show a specific doctor
    public function show($id){

    }
    
    //show all doctor (admin panel)
    public function adminIndex(){
    }

    
}



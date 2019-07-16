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
    }

    //show a specific doctor
    public function show($id){

    }

    
}



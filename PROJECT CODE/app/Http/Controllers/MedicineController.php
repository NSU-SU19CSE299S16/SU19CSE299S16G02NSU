<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function about(){
        return view('admin.about');
    }
    public function services(){
        return view('admin.services');
    }
   
}

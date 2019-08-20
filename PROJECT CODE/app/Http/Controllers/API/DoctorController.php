<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DoctorController extends Controller
{
    public function searchDoctor(){
        if($search = \Request::get('q')){
            $doctors = DB::table('doctors')->where('doc_name','LIKE',"%$search%")->get();
        }
        return $doctors;
    }
}

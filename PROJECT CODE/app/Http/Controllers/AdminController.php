<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index(){
        $med_count = DB::table('medicines')->count();
        $order_count = DB::table('orders')->count();
        $user_count = DB::table('users')->count();
        $doc_count = DB::table('doctors')->count();

        return view('admin.dashboard',['med_count'=>$med_count,  'order_count'=>$order_count, 'user_count'=>$user_count, 'doc_count'=>$doc_count]);
    }
}
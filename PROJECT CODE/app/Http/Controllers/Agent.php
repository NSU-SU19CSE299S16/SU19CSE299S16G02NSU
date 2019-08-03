<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Agent extends Controller
{
    public function index()
    {
        return view('agentsimulator.index');
    }
}

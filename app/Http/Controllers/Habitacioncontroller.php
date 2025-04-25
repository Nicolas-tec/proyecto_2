<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Habitacioncontroller extends Controller
{
    public function index(){
        $datosH = DB::table('habitacion')->get();
        return view('control', compact('$datosH'));
    }
}

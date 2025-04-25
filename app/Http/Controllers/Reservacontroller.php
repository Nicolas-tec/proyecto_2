<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reservacontroller extends Controller
{
    public function index(){
        $datos=DB::select('select * from reserva');
        return view("control")->with("datos",$datos);
    }
}

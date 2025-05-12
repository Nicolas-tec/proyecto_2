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
    public function create(Request $request){
        $sql=DB::insert('insert into reserva (id_cliente,Nombre_cliente,N_habitacion,F_reserva,pago,F_ingreso,F_salida) values (?,?,?,?,?,?,?)', [
            $request->id_cliente,
            $request->Nombre_cliente,
            $request->N_habitacion,
            $request->F_reserva,
            $request->pago,
            $request->F_ingreso,
            $request->F_salida
        ]);
        if ($sql == true) {
            return back()->with("Reserva registarada");
        } else {
            # code...
        }
        
    }
}

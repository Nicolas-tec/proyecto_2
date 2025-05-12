<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Habitacioncontroller;
use App\Http\Controllers\Reservacontroller;

Route::get('/', function () {
    $datos = DB::table('reserva')->get();
    $datosH = DB::table('habitacion')->get();
    return view('control', compact('datos','datosH'));
});
//Route::get("/", [Reservacontroller::class, "index"])->name("Reserva.index");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::post("/crear-reserva", [Reservacontroller::class, "create"])->name("Reserva.create");
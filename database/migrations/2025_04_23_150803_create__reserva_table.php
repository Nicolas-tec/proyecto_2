<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id('id_reserva');
            $table->string('id_cliente');
            $table->string('Nombre_cliente');
            $table->string('N_habitacion');
            $table->string('F_reserva');
            $table->string('pago');
            $table->string('F_ingreso');
            $table->string('F_salida');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};

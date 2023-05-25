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
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id('id_orden');
            $table->double('productos');
            $table->double('no_guia');
            $table->double('paqueteria');
            $table->double('f_envio');
            $table->double('f_entrega');
            $table->double('id_cliente');
            $table->double('destino');
            $table->double('estatus');         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};

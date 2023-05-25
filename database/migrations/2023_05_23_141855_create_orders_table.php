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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('id_orden')->unique();
            $table->string('productos')->nullable();
            $table->string('no_guia')->nullable();
            $table->string('paqueteria')->nullable();
            $table->string('f_envio')->nullable();
            $table->string('f_entrega')->nullable();
            $table->string('id_cliente')->nullable();
            $table->string('destino')->nullable();
            $table->string('estatus')->nullable();         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

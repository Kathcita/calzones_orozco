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
        Schema::create('facturacions', function (Blueprint $table) {
            $table->id('IdFactura');
            $table->dateTime('FechaFactura');
            $table->decimal('DescuentoFactura', 5,2);
            $table->unsignedBigInteger('IdCliente');
            $table->unsignedBigInteger('IdUsuario');
            $table->decimal('TotalFactura', 12,2);
            $table->timestamps();
    
            $table->foreign('IdCliente')->references('IdCliente')->on('clientes');
            $table->foreign('IdUsuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturacions');
    }
};

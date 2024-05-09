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
        Schema::create('detallecompras', function (Blueprint $table) {
            $table->id('IdDetalleCompra');
            $table->unsignedBigInteger('IdCompras');
            $table->unsignedBigInteger('CantidadProductosC');
            $table->unsignedBigInteger('IdProducto');
            $table->decimal('PrecioC', 6,2);
            $table->decimal('PrecioV', 6,2);
            $table->timestamps();

            $table->foreign('IdCompras')->references('IdCompras')->on('compras');
            $table->foreign('IdProducto')->references('IdProducto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detallecompras');
    }
};

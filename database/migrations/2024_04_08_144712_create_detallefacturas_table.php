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
        Schema::create('detallefacturas', function (Blueprint $table) {
            $table->id('IdDetalleFactura');
            $table->unsignedBigInteger('CantidadProductosF');
            $table->unsignedBigInteger('IdProducto');
            $table->unsignedBigInteger('IdFactura');
            $table->decimal('Precio', 6,2);
            $table->timestamps();

            $table->foreign('IdProducto')->references('IdProducto')->on('productos');
            $table->foreign('IdFactura')->references('IdFactura')->on('facturacions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detallefacturas');
    }
};

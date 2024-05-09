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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('IdProducto');
            $table->unsignedBigInteger('IdTalla');
            $table->unsignedBigInteger('IdMarca');
            $table->unsignedBigInteger('IdColor');
            $table->unsignedBigInteger('IdCategoria');
            $table->string('Distintivo', 50)->charset('utf8')->nullable(false);
            $table->decimal('PrecioVenta', 6,2)->nullable(false);
            $table->unsignedBigInteger('Stock')->default(0)->nullable(false);
            $table->string('CodProducto', 30)->charset('utf8')->nullable(false)->unique();
            
    
            $table->foreign('IdTalla')->references('IdTalla')->on('tallas');
            $table->foreign('IdMarca')->references('IdMarca')->on('marcas');
            $table->foreign('IdColor')->references('IdColor')->on('colors');
            $table->foreign('IdCategoria')->references('IdCategoria')->on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

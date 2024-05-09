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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('IdCliente');
            $table->string('NombreCliente', 25)->nullable(false);
            $table->string('ApellidoCliente', 25)->nullable(false);
            $table->string('CedulaCliente', 16)->unique()->nullable(false);
            $table->string('DireccionCliente', 50)->nullable()->nullable(false);
            $table->string('NumCliente', 20)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};

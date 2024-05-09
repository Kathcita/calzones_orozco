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
        Schema::create('compras', function (Blueprint $table) {
            $table->id('IdCompras');
            $table->dateTime('FechaCompras')->nullable(false);
            $table->unsignedBigInteger('IdProveedor');
            $table->decimal('TotalGeneral', 12,2)->nullable(false);
            $table->timestamps();

            $table->foreign('IdProveedor')->references('IdProveedor')->on('proveedors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};

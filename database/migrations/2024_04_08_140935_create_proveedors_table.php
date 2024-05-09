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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id('IdProveedor');
            $table->string('NombreEmpresa', 25)->nullable(false);
            $table->string('NumProveedor', 20)->nullable(false);
            $table->string('DireccionProveedor', 50)->nullable(false);
            $table->string('CorreoProveedor', 50)->unique()->nullable(false);
            $table->string('Estado', 10)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};

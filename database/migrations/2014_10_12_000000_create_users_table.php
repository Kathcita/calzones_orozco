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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 25)->nullable(false);
            $table->string('ApellidoUsuario', 25)->nullable();
            $table->string('CedulaUsuario', 16)->unique()->nullable();
            $table->string('Usuario', 20)->unique()->nullable();
            $table->string('password', 250)->nullable(false);
            $table->string('TipoUsuario', 25)->nullable();
            $table->string('Estado', 10)->default('Activo')->nullable();
            $table->string('email', 100)->unique()->nullable(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

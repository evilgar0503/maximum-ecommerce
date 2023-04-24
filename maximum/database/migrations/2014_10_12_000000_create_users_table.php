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
            $table->id();
            $table->string('nombre');
            $table->string('apellidos')->nullable();
            $table->string('dni', 9)->unique()->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('telefono', 9)->nullable();
            $table->string('pais')->nullable();
            $table->string('provincia')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('direccion')->nullable();
            $table->integer('cp')->nullable();
            $table->set('rol', ['cliente', 'admin', 'empresa'])->default('cliente');
            $table->string('ruta_imagen');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};

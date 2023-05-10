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
            $table->id();
            $table->string('nombre');
            $table->longText('descripcion');
            $table->text('ingredientes');
            $table->text('instrucciones');
            $table->string('marca');
            $table->string('sabor');
            $table->string('edad');
            $table->integer('peso');
            $table->float('precio');
            $table->float('precio_descuento');
            $table->float('precio_empresa');
            $table->integer('stock');
            $table->string('ruta_imagen');
            $table->set('estado', ['activo', 'desactivado']);
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

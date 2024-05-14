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
        Schema::create('detalle_proveedores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Proveedor');
            $table->foreign('ID_Proveedor')->references('id')->on('proveedores');
            $table->unsignedBigInteger('ID_Materia_Prima');
            $table->foreign('ID_Materia_Prima')->references('id')->on('materia_prima');
            $table->integer('Cantidad_Semanal');
            $table->decimal('Precio_Total_Semanal', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_proveedores');
    }
};

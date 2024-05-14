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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Cliente');
            $table->foreign('ID_Cliente')->references('id')->on('clientes');
            $table->dateTime('Fecha_Hora');
            $table->enum('Estado', ['Recibido', 'En Camino', 'Entregado', 'Cancelado']);
            $table->enum('Tipo', ['Delivery', 'Local']);
            $table->integer('ID_Mesa')->nullable();
            $table->decimal('Monto_Total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};

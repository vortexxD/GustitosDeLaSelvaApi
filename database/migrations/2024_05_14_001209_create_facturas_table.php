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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Pedido');
            $table->foreign('ID_Pedido')->references('id')->on('pedidos');
            $table->dateTime('Fecha_Emision');
            $table->decimal('Total', 10, 2);
            $table->enum('Estado', ['Generada', 'Enviada', 'Pagada']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};

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
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Pedido');
            $table->foreign('ID_Pedido')->references('id')->on('pedidos');
            $table->unsignedBigInteger('ID_Producto');
            $table->foreign('ID_Producto')->references('id')->on('productos');
            $table->integer('Cantidad');
            $table->decimal('Precio_Unitario', 10, 2);
            $table->decimal('Subtotal', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedidos');
    }
};

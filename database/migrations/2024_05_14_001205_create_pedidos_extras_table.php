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
        Schema::create('pedidos_extras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Pedido');
            $table->foreign('ID_Pedido')->references('id')->on('pedidos');
            $table->unsignedBigInteger('ID_Materia_Prima');
            $table->foreign('ID_Materia_Prima')->references('id')->on('materia_prima');
            $table->integer('Cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos_extras');
    }
};

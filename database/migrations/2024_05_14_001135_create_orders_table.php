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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Customer');
            $table->foreign('ID_Customer')->references('id')->on('customers');
            $table->dateTime('date_time');
            $table->enum('Status', ['Recibido', 'En Camino', 'Entregado', 'Cancelado']);
            $table->enum('Type', ['Delivery', 'Local']);
            $table->integer('ID_Table')->nullable();
            $table->decimal('total_amount', 10, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

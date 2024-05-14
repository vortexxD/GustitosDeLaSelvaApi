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
        Schema::create('extra_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Order');
            $table->foreign('ID_Order')->references('id')->on('orders');
            $table->unsignedBigInteger('ID_Raw_Material');
            $table->foreign('ID_Raw_Material')->references('id')->on('raw_materials');
            $table->integer('amount');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_orders');
    }
};

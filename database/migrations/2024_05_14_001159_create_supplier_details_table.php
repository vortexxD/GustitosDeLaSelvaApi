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
        Schema::create('supplier_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Supplier');
            $table->foreign('ID_Supplier')->references('id')->on('suppliers');
            $table->unsignedBigInteger('ID_Raw_Material');
            $table->foreign('ID_Raw_Material')->references('id')->on('raw_materials');
            $table->integer('weekly_amount');
            $table->decimal('total_weekly_price', 10, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_details');
    }
};

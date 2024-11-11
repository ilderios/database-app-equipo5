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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id(); // unsignedBigInteger por defecto
            $table->string('sku', 255);
            $table->integer('stock');
            $table->string('lot_number', 255);
            $table->integer('box_count');
            $table->unsignedBigInteger('product_id'); 
            $table->unsignedBigInteger('warehouse_id'); 
            $table->timestamps();

            // Relaciones
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};

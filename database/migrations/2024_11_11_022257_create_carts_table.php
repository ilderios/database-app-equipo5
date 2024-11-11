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
        Schema::create('Carts', function (Blueprint $table) {
            $table->id(); // unsignedBigInteger por defecto
            $table->unsignedBigInteger('Product_id');
            $table->integer('quantity');
            $table->timestamps();

            // Relación con la tabla products
            $table->foreign('Product_id')->references('id')->on('Products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};

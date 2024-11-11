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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // unsignedBigInteger por defecto
            $table->string('name', 255);
            $table->string('description', 255);
            $table->decimal('price', 8, 2);
            $table->string('slug', 255);
            $table->unsignedBigInteger('category_id')->nullable(); // Esta columna se deja por si se requiere a futuro
            $table->unsignedBigInteger('brand_id')->nullable(); // Esta columna se deja por si se requiere a futuro
            $table->string('sku', 255);
            $table->timestamps();

            // Relaciones opcionales para el futuro (por ahora no tienen ninguna tabla a la que referirse)
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            // $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

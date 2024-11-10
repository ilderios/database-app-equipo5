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
        Schema::create('images', function (Blueprint $table) {
        $table->id();
        $table->string('url', 255);
        $table->string('slug', 255)->unique();
        $table->string('imageable_type', 255); // Tipo del modelo (Product, User, etc.)
        $table->unsignedBigInteger('imageable_id'); // ID del modelo (Product ID, etc.)
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};

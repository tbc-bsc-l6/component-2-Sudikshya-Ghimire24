<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID for the order item
            $table->foreignId('order_id')->constrained()->onDelete('cascade'); // Link to the orders table
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Link to the products table
            $table->integer('quantity'); // Quantity of the product
            $table->decimal('price', 10, 2); // Price of the product at the time of order
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};

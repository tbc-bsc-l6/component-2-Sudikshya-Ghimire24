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
    Schema::create('orders', function (Blueprint $table) {
        $table->id(); // Auto-incrementing ID for the order
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to the users table
        $table->decimal('total_price', 10, 2); // Store the total price of the order
        $table->string('billing_name'); // Billing name
        $table->string('billing_address'); // Billing address
        $table->string('payment_info'); // Payment method or details
        $table->string('status')->default('pending'); // Order status (pending, completed, etc.)
        $table->timestamps(); // Timestamps for created_at and updated_at
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

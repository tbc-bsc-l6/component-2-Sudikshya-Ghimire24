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
        $table->string('name')->nullable();
        $table->string('rec_address')->nullable();
        $table->string('phone')->nullable();
        $table->string('status')->default('in progress'); 
        $table->unsignedBigInteger('user_id')->nullable(); 
        $table->unsignedBigInteger('product_id')->nullable();

        // Define foreign keys correctly
        $table->foreign('product_id')->references('id')
              ->on('products')->onUpdate('cascade');

        $table->foreign('user_id')->references('id')
              ->on('users')->onDelete('cascade');
              
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

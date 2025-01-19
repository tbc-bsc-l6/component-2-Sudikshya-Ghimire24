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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Changed to unsignedBigInteger
            $table->unsignedBigInteger('product_id'); // Changed to unsignedBigInteger

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Cascade on delete for user
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade'); // Cascade on both update and delete for product
            
            $table->timestamps();
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

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
        Schema::table('users', function (Blueprint $table) {
            $table->string('user_type')->default('user'); // Default to 'user'
        });
    }
    
    public function down()
{
    Schema::table('users', function (Blueprint $table) {
        // Check if column exists before dropping it
        if (Schema::hasColumn('users', 'user_type')) {
            $table->dropColumn('user_type');
        }
    });
}

    
};

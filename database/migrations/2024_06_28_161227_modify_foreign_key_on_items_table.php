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
        Schema::table('items', function (Blueprint $table) {
            // Drop the existing foreign key constraint
            $table->dropForeign(['product_id']);
            
            // Add the new foreign key constraint with cascade on delete and update
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            // Drop the new foreign key constraint
            $table->dropForeign(['product_id']);
            
            // Add the original foreign key constraint back
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });
    }
};

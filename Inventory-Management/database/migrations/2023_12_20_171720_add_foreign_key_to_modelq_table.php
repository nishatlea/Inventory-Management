<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('modelq', function (Blueprint $table) {
            // Add foreign key constraint
            $table->unsignedInteger('brand_id');

            // Define foreign key relationship
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onDelete('cascade'); // Define the action on delete (e.g., casca
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('modelq', function (Blueprint $table) {
            // Drop foreign key constraint
            $table->dropForeign(['brand_id']);

            // Drop the column
            $table->dropColumn('brand_id');
        });
    }
};

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
        Schema::table('portfolios', function (Blueprint $table) {
            $table->boolean('show_on_home')->default(false)->after('category_id')
                ->comment('Display this portfolio in homepage Products & Experiments section');
            $table->boolean('featured')->default(false)->after('show_on_home')
                ->comment('Highlight this portfolio in Product Spotlight section (only one should be featured)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn(['show_on_home', 'featured']);
        });
    }
};

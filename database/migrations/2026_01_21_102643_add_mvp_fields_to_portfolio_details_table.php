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
        Schema::table('portfolio_details', function (Blueprint $table) {
            $table->string('status')->nullable()->after('description')->comment('Estado del MVP, ej: Live 🚀');
            $table->string('stack')->nullable()->after('status')->comment('Stack tecnológico usado, ej: Laravel + Vue');
            $table->date('launched_at')->nullable()->after('stack')->comment('Fecha de lanzamiento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolio_details', function (Blueprint $table) {
            $table->dropColumn(['status', 'stack', 'launched_at']);
        });
    }
};

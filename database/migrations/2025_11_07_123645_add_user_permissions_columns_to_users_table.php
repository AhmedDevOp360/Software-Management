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
        Schema::table('users', function (Blueprint $table) {
            $table->json('functions')->nullable()->after('role');
            $table->json('visible_company_ids')->nullable()->after('functions');
            $table->json('admin_functions')->nullable()->after('visible_company_ids');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['functions', 'visible_company_ids', 'admin_functions']);
        });
    }
};

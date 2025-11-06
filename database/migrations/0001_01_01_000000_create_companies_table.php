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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('vat_number')->unique();
            $table->string('phone', 20);

            // Legal address fields
            $table->string('legal_address_street');
            $table->string('legal_address_number', 20);
            $table->string('legal_address_postal', 20);
            $table->string('legal_address_city', 100);

            // Operating address fields
            $table->string('operating_address_street');
            $table->string('operating_address_number', 20);
            $table->string('operating_address_postal', 20);
            $table->string('operating_address_city', 100);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};

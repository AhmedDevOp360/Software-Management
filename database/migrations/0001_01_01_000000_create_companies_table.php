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
            $table->foreignId('company_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('vat_number')->unique();
            $table->string('tax_code')->nullable();
            $table->string('ateco')->nullable();
            $table->string('sdi')->nullable();
            $table->text('registered_office')->nullable();
            $table->text('operating_office')->nullable();
            $table->string('main_email')->nullable();
            $table->string('pec_email')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('phone_2', 20)->nullable();
            $table->string('company_contact_person')->nullable();
            $table->string('employer')->nullable();
            $table->string('head_of_prevention')->nullable();
            $table->string('workers_safety_representative')->nullable();
            $table->string('company_doctor')->nullable();
            $table->boolean('workplace_safety_risk')->default(false);
            $table->boolean('subject_to_cpi')->default(false);
            $table->string('rischio_antincendio')->nullable();
            $table->string('accountant_name')->nullable();
            $table->string('accountant_phone', 20)->nullable();
            $table->string('accountant_email')->nullable();
            $table->string('labor_consultant_name')->nullable();
            $table->string('labor_consultant_phone', 20)->nullable();
            $table->string('labor_consultant_email')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('send_deadline_notification')->default(false);
            $table->boolean('freeze_company')->default(false);
            $table->json('contacts')->nullable();

            // Legal address fields
            $table->string('legal_address_street')->nullable();
            $table->string('legal_address_number', 20)->nullable();
            $table->string('legal_address_postal', 20)->nullable();
            $table->string('legal_address_city', 100)->nullable();

            // Operating address fields
            $table->string('operating_address_street')->nullable();
            $table->string('operating_address_number', 20)->nullable();
            $table->string('operating_address_postal', 20)->nullable();
            $table->string('operating_address_city', 100)->nullable();

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

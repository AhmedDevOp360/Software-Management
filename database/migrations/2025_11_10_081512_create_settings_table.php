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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            // Alert Notifications Settings
            $table->integer('days_prior_course_deadline')->default(1);
            $table->integer('days_prior_health_insurance')->default(1);
            $table->integer('days_prior_maintenance_deadline')->default(1);

            // SMTP Configuration
            $table->string('smtp_address')->nullable();
            $table->string('smtp_alias')->nullable();
            $table->string('smtp_reply_to')->nullable();
            $table->string('smtp_host')->nullable();
            $table->string('smtp_port')->nullable();
            $table->string('smtp_username')->nullable();
            $table->string('smtp_password')->nullable();

            // Notification Settings
            $table->boolean('email_auto_generated')->default(false);
            $table->boolean('whatsapp_notification')->default(false);
            $table->text('email_template')->nullable();
            $table->string('notification_subject')->nullable();
            $table->text('notification_body')->nullable();

            // WhatsApp SMTP Configuration
            $table->string('whatsapp_smtp_address')->nullable();
            $table->string('whatsapp_smtp_alias')->nullable();
            $table->string('whatsapp_smtp_reply_to')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

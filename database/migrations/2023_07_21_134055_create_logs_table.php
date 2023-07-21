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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('log_type', 200);
            $table->string('log_action', 255);
            $table->string('log_description', 255);
            $table->string('log_ip', 200)->nullable();
            $table->string('log_user_agent', 250)->nullable();
            $table->integer('log_client_id')->default(0);
            $table->integer('log_user_id')->default(0);
            $table->integer('log_entity_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};

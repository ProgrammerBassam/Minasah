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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('type', 200)->nullable();
            $table->string('website', 200)->nullable();
            $table->string('referral', 200)->nullable();
            $table->decimal('rate', 15, 2)->nullable();
            $table->string('currency_code', 200);
            $table->integer('net_terms');
            $table->string('tax_id_number', 255)->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->dateTime('archived_at')->nullable();
            $table->dateTime('accessed_at')->nullable();

            $table->foreignId('user_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

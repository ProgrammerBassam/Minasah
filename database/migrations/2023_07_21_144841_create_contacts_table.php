<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('title', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('phone', 200)->nullable();
            $table->string('extension', 200)->nullable();
            $table->string('mobile', 200)->nullable();
            $table->string('photo', 200)->nullable();
            $table->string('pin', 255)->nullable();
            $table->text('notes')->nullable();
            $table->string('auth_method', 200)->nullable();
            $table->string('password_hash', 200)->nullable();
            $table->string('password_reset_token', 200)->nullable();
            $table->timestamp('token_expire')->nullable();
            $table->boolean('primary')->default(false);
            $table->boolean('important')->default(false);
            $table->boolean('billing')->default(false);
            $table->boolean('technical')->default(false);
            $table->timestamp('archived_at')->nullable();
            $table->timestamp('accessed_at')->nullable();
            $table->integer('location_id')->default(0);
            $table->string('department', 200)->nullable();
            $table->timestamps();

            $table->foreignId('user_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};

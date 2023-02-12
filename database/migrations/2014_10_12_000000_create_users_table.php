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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('last_online')->nullable();
            $table->boolean('verification_code')->nullable();
            $table->string('new_email')->nullable();
            $table->integer('status')->default(2);
            $table->integer('first')->default(0);
            $table->timestamp('last_accept_date')->nullable();
            $table->timestamp('created')->nullable();
            $table->timestamp('modified')->nullable();
            $table->string('company_contact')->nullable();
            $table->decimal('credits',8,2)->nullable();
            $table->integer('first_trip')->default(0);
            $table->boolean('incomplete_profile')->default(0);
            $table->boolean('phone_verify')->default(0);
            $table->string('token_auto_login')->nullable();
            $table->string('user_vertical')->nullable();
            $table->integer('language_id')->nullable();
            $table->boolean('no_registered')->default(0);
            $table->softDeletes();
//            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->foreignId('current_team_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

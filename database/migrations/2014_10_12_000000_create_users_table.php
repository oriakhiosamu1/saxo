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
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('mobile_number');
            $table->string('plans');
            $table->string('country');
            $table->string('account_type');
            $table->string('payment_option');
            $table->string('profile_picture')->nullable();
            $table->boolean('isAdmin')->default(false);
            $table->string('pin')->nullable();
            $table->string('referral_link')->nullable();
            $table->string('paid_with')->nullable();
            $table->string('balance')->default(0)->nullable();
            $table->string('deposit')->default(0)->nullable();
            $table->string('profit')->default(0)->nullable();
            $table->string('ref_bonus')->default(0)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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

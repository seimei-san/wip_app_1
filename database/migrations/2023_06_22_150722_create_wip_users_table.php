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
        Schema::create('wip_users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',20)->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('company_id', 8);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('user_active');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wip_users');
    }
};

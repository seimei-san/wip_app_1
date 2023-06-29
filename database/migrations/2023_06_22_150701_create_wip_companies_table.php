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
        Schema::create('wip_companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_id', 8)->unique();
            $table->string('company_short_name', 12)->unique();
            $table->string('company_display_name', 32);
            $table->boolean('company_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wip_companies');
    }
};

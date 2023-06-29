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
        Schema::create('wip_user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',20)->unique();
            $table->tinyText('chat_sys');
            $table->tinyInteger('chat_interval');
            $table->tinyInteger('chat_limit');
            $table->string('user_note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. 
     */
    public function down(): void
    {
        Schema::dropIfExists('wip_user_profiles');
    }
};

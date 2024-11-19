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
        Schema::create('daily_ciphers', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();          // Unique code for each day
            $table->string('morse_code')->nullable();              // Morse code equivalent (if needed)
            $table->integer('reward')->default(1000000); // Default reward of 1,000,000 coins
            $table->date('valid_for');                 // Date this code is valid for
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_ciphers');
    }
};

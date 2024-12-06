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
        Schema::create('daily_combo_cards', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // e.g., "Market", "PR & Team", "Specials", "Web3"
            $table->string('title');
            $table->string('description');
            $table->integer('cost'); // Cost to unlock the card
            $table->integer('reward'); // Reward for unlocking
            $table->date('date'); // Date the card is available
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_combo_cards');
    }
};

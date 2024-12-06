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
        Schema::create('market_cards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('img');
            $table->integer('profit');
            $table->integer('level');
            $table->integer('pointsNeeded');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market_cards');
    }
};

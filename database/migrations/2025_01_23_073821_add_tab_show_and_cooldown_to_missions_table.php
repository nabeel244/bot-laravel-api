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
        Schema::table('missions', function (Blueprint $table) {
            $table->string('tab_show')->nullable()->after('image'); // Add 'tab_show' field
            $table->integer('cooldown')->nullable()->after('tab_show'); // Add 'cooldown' field in minutes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('missions', function (Blueprint $table) {
            $table->dropColumn('tab_show');
            $table->dropColumn('cooldown'); 
        });
    }
};

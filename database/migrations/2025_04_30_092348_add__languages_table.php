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
        
        Schema::table('languages', function (Blueprint $table) {
            $table->string('country_key')->after('name');
            $table->string('language_name')->after('country_key');
            $table->string('language_key')->after('language_name');
        });
        
       }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('languages', function (Blueprint $table) {
            $table->dropColumn(['country_key', 'language_name', 'language_key']);
        });
    }
};

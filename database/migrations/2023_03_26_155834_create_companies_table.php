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
        Schema::create('companies', function (Blueprint $table) {
            DB::statement('SET SESSION sql_require_primary_key=0');
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('type');
            $table->string('location');
            $table->string('category');
            $table->string('website');
            $table->string('about');
            $table->string('size');
            $table->string('fb_link');
            $table->string('twitter_link');
            $table->string('linkedin_link');
            $table->string('logo');
            $table->string('banner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};

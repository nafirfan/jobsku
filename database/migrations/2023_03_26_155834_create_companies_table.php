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
            // develop
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
            // develop
=======
            $table->string('company_name');
            $table->string('company_type');
            $table->string('location')->nullable();
            $table->string('category')->nullable();
            $table->string('website')->nullable();
            $table->string('about')->nullable();
            $table->string('size')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();

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

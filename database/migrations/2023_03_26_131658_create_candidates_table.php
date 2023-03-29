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
        Schema::create('candidates', function (Blueprint $table) {
            DB::statement('SET SESSION sql_require_primary_key=0');
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            // Basic Information
            $table->integer('age');
            $table->string('location');
            $table->string('currentJob');
            $table->string('qualification');
            $table->string('description');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('linkedin_link');
            $table->integer('years_of_experience');
            $table->string('website_portfolio');

            // Edication
            $table->string('education_level');
            $table->string('major');
            $table->string('university');
            $table->string('gpa');
            $table->date('univ_starting_period');
            $table->date('univ_ending_period');

            // Experience
            $table->string('company_name');
            $table->string('designation');
            $table->date('exp_starting_period');
            $table->date('exp_ending_period');
            $table->boolean('is_working');
            $table->string('exp_description');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};

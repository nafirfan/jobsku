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
        Schema::create('jobs', function (Blueprint $table) {
            DB::statement('SET SESSION sql_require_primary_key=0');
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('companies_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('companies_id')->references('id')->on('companies');
            $table->string('name');
            $table->string('location');
            $table->string('type');
            $table->integer('salary_min');
            $table->integer('salary_max');
            $table->string('category');
            $table->string('description');
            $table->string('responsibilities');
            $table->string('educational_req');
            $table->integer('year_of_experience');
            $table->string('gender');
            $table->integer('vacancy');
            $table->date('expiration_pub');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};

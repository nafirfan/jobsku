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
        Schema::create('bookmark_jobs', function (Blueprint $table) {
            DB::statement('SET SESSION sql_require_primary_key=0');
            $table->uuid('id')->primary();
            $table->uuid('job_id');
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->uuid('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookmark_jobs');
    }
};

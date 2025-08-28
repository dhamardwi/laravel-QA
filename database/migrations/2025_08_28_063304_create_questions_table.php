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
        Schema::create('questions', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Content Columns
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            
            // Counter Columns with clearer names
            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedInteger('answer_count')->default(0);
            $table->integer('vote_count')->default(0);

            // Foreign Keys & Relationships
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('best_answer_id')->nullable();
            
            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};

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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->string('time');
            $table->foreignId('user_id')->constrained();
            $table->string('rank_1');
            $table->string('rank_2');
            $table->string('rank_3');
            $table->string('rank_4');
            $table->string('rank_5');
            $table->string('rank_6')->nullable();
            $table->string('rank_7')->nullable();
            $table->string('rank_8')->nullable();
            $table->string('rank_9')->nullable();
            $table->string('rank_10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};

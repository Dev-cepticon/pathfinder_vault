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
        Schema::create('ancestries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->nullable();//->constrained();
            $table->string('name');
            $table->json('description')->nullable();
            $table->integer('hit_points');
            $table->string('size');
            $table->integer('speed');
            $table->json('ability_boosts');
            $table->string('ability_flaw');
            $table->json('languages')->nullable();
            $table->json('traits')->nullable();
            $table->string('vision');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ancestries');
    }
};

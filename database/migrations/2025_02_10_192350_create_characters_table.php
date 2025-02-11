<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;
use App\Models\Alignment;
use App\Models\Archetype;
use App\Models\Ancestry;
use App\Models\Background;
use App\Models\Heritage;



return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('characters', function (Blueprint $table) {
            //system
            $table->id();
            $table->foreignIdfor(User::class)->constrained()->onDelete('cascade'); 
            //anscestry
            $table->foreignIdfor(Ancestry::class)->nullable()->constrained()->onDelete('set null');
            $table->foreignIdfor(Heritage::class)->nullable()->constrained()->onDelete('set null');
            $table->json('languages')->nullable();
            //Background
            $table->foreignIdfor(Background::class)->nullable()->constrained()->onDelete('set null');
            $table->foreignIdfor(Alignment::class)->nullable()->constrained()->onDelete('set null');

            //class
            $table->foreignIdfor(Archetype::class)->nullable()->constrained()->onDelete('set null'); 
            
            //Basic Details
            $table->string('name');
            $table->unsignedTinyInteger('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('hit_points')->default(0);
            $table->integer('max_hp')->default(0);
            $table->integer('temp_hp')->nullable();
            $table->integer('speed')->nullable();
            $table->json('ability_scores');
            $table->unsignedTinyInteger('hero_points')->default(0);
            
            $table->json('skill_proficiencies')->nullable(); 
            $table->json('feat_choices')->nullable(); 

            $table->json('features')->nullable(); 
            $table->json('equipment')->nullable(); // Store gear information
            $table->text('notes')->nullable(); // User-added custom notes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};

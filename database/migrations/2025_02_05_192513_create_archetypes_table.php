<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Archetype;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('archetypes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->nullable();//->constrained();
            $table->string('name');
            $table->json('description');
            $table->json('key_attributes');
            $table->unsignedTinyInteger('hit_points');
            $table->json('initail_proficiencies');
            $table->timestamps();
        });

        Schema::create('archetype_features', function (Blueprint $table) {
            $table->id();
            $table->foreignIdfor(Archetype::class);//->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->unsignedTinyInteger('level');
            $table->json('effect');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archetypes');
    }
};

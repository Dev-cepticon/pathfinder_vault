<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Ancestry;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('feats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->nullable();//->constrained();
            $table->foreignIdfor(Ancestry::class)->nullable();//->constrained();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('prereq')->nullable();
            $table->string('type');
            $table->unsignedTinyInteger('level');
            $table->json('tags')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feats');
    }
};

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
        Schema::create('user_purchased_content', function (Blueprint $table) {
            $table->foreignIdfor(\App\Models\User::class)->constrained()->onDelete('cascade');
            $table->boolean('srd')->default(true);
            $table->boolean('homebrew')->default(true);
            $table->boolean('player handbook')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('user_purchased_content');
    }
};

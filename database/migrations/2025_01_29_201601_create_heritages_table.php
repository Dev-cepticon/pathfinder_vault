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
        Schema::create('heritages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->nullable();//->constrained();
            $table->foreignIdfor(Ancestry::class);//->constrained();
            $table->string('name');
            $table->text('description')->nullable();
            $table->json('addon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heritages');
    }
};

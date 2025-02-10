<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Ancestry;
use App\Models\Language;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('speakers');
            $table->timestamps();
        });

        //Languages for ancestries is a text field do to the fact that there are choices 
        //required this may be better suited for traits.
        
        // Schema::create('ancestry_language', function (Blueprint $table) {
        //     $table->foreignIdfor(Ancestry::class)->constrained()->cascadeOnDelete();
        //     $table->foreignIdfor(Language::class)->constrained();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};

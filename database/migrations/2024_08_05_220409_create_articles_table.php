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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained('sections');
            $table->foreignId('serie_id')->constrained('series');
            $table->foreignId('family_description_id')->constrained('family_descriptions');
            $table->foreignId('stranding_id')->constrained('stranding_types');
            $table->foreignId('conductor_pair_triad_id')->constrained('conductor_pair_triads');
            $table->foreignId('conductor_gauge_id')->constrained('conductor_gauges');
            $table->integer('voltage');
            $table->integer('temperature');
            $table->boolean('grounding');
            $table->boolean('shielded');
            $table->boolean('armour');
            $table->string('conductor_material');
            $table->string('color_code');
            $table->string('jacket_material');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

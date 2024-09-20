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
        Schema::create('code_structures', function (Blueprint $table) {
            $table->id();
            $table->string('section')->nullable(); // 'SECTION'
            $table->string('serie')->nullable(); // 'SERIE'
            $table->string('family_description')->nullable(); // 'FAMILY DESCRIPTION'
            $table->string('stranding_type')->nullable(); // 'STRANDING TYPE'
            $table->string('conductors_or_pairs_or_triad')->nullable(); // '#CONDUCTORS, #PAIR, #TRIAD'
            $table->string('conductor_gauge')->nullable(); // 'CONDUCTOR GAUGE'
            $table->string('conductor_material')->nullable(); // 'CONDUCTOR MATERIAL'
            $table->string('insulation_material')->nullable(); // 'INSULATION MATERIAL'
            $table->string('voltage')->nullable(); // 'VOLTAGE'
            $table->string('temperature')->nullable(); // 'TEMPERATURE'
            $table->string('color_code')->nullable(); // 'COLOR CODE'
            $table->string('grounding')->nullable(); // 'GROUNDING'
            $table->string('shielded')->nullable(); // 'SHIELDED'
            $table->string('armour')->nullable(); // 'ARMOUR'
            $table->string('jacket_material')->nullable(); // 'JACKET MATERIAL'
            $table->string('jacket_color')->nullable(); // 'JACKET COLOR'
            $table->string('installation_type')->nullable(); // 'INSTALLATION TYPE'
            $table->text('standard')->nullable(); // 'STANDARD'
            $table->string('construction')->nullable(); // 'CONSTRUCTION'
            $table->string('ekabel_part_number')->nullable(); // 'EKABEL PART NUMBER'
            $table->text('complete_description')->nullable(); // 'COMPLETE DESCRIPTION'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('code_structure');
    }
};





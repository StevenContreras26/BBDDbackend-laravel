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
        Schema::create('cm_alu_astm_b801_table1', function (Blueprint $table) {
            $table->id();
            $table->integer('cmil');
            $table->string('awg');
            $table->string('mm2');
            $table->decimal('lbs_per_1000_ft', 8, 2);
            $table->decimal('kg_per_km', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cm_alu_astm_b801_table1');
    }
};

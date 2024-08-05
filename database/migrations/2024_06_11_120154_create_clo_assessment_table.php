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
        Schema::create('clo_assessment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('clo_id');
            $table->unsignedBiginteger('assessment_id');
            $table->integer('presentase');

            $table->foreign('clo_id')->references('id')->on('clos')->onDelete('cascade');
            $table->foreign('assessment_id')->references('id')->on('assessments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clo_assessment');
    }
};

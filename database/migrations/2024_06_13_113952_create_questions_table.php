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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->integer('STUDYPROGRAMID');
            $table->string('SUBJECTCODE');
            $table->integer('CLOPLOID');
            $table->integer('PLONUMBER');
            $table->integer('CLOCLOID');
            $table->integer('CLONUMBER');
            $table->string('QUESTIONNUMBER');
            $table->integer('QUESTION_PERCENTAGE');
            $table->longText('CLOASSESSMENTTOOLSNAME');
            $table->bigInteger('COURSEID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};

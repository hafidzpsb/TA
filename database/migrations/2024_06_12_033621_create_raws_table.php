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
        Schema::create('raws', function (Blueprint $table) {
            $table->id();
            $table->integer('STUDYPROGRAMID');
            $table->string('STUDYPROGRAMNAME');
            $table->string('SUBJECTCODE');
            $table->integer('CLOPLOID');
            $table->longText('PLONAME');
            $table->integer('PLONUMBER');
            $table->integer('CLOCLOID');
            $table->integer('CLONUMBER');
            $table->longText('CLONAME');
            $table->longText('QUESTIONDESCRIPTION');
            $table->string('QUESTIONNUMBER');
            $table->integer('QUESTION_PERCENTAGE');
            $table->longText('CLOASSESSMENTTOOLSNAME');
            $table->integer('ASSESSMENT_PERCENTAGE');
            $table->bigInteger('STUDENTID');
            $table->string('FULLNAME');
            $table->integer('CLOPOINT');
            $table->bigInteger('COURSEID');
            $table->string('CLASS');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raws');
    }
};

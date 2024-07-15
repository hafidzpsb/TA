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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->integer('STUDYPROGRAMID');
            $table->bigInteger('COURSEID');
            $table->integer('CLOPLOID');
            $table->integer('CLOCLOID');
            $table->string('QUESTIONNUMBER');
            $table->longText('CLOASSESSMENTTOOLSNAME');
            $table->bigInteger('STUDENTID');
            $table->integer('CLOPOINT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};

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
        Schema::create('matkul_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('matkul_id');
            $table->unsignedBiginteger('student_id');

            $table->foreign('matkul_id')->references('id')->on('matkuls')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkul_student');
    }
};

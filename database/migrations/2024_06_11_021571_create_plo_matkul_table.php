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
        Schema::create('plo_matkul', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('plo_id');
            $table->unsignedBiginteger('matkul_id');

            $table->foreign('plo_id')->references('id')->on('plos')->onDelete('cascade');
            $table->foreign('matkul_id')->references('id')->on('matkuls')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plo_matkul');
    }
};

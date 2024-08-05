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
        Schema::create('plos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peo_id');
            $table->string('kode_plo');
            $table->longText('deskripsi');
            $table->foreign('peo_id')->references('id')->on('peos')->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plos');
    }
};

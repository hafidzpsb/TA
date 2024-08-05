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
        Schema::create('peos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('kurikulum_id');
            $table->string('kode_peo');
            $table->longText('deskripsi');
            $table->foreign('kurikulum_id')->references('id')->on('kurikulums')->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peos');
    }
};

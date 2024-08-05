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
        Schema::create('clos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('matkul_id');
            $table->string('kode_clo');
            $table->longText('deskripsi');
            $table->foreign('matkul_id')->references('id')->on('matkuls')->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clos');
    }
};

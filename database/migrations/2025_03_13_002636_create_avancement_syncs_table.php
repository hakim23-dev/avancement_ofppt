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
        Schema::create('avancement_syncs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules');
            $table->unsignedBigInteger('fusion_id');
            $table->foreign('fusion_id')->references('id')->on('fusions')->onUpdate('cascade')->onDelete('cascade');
            $table->Integer('volume_realise');
            $table->Integer('volume_restant');
            $table->enum('semestre', ['S1', 'S2']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avancement_syncs');
    }
};

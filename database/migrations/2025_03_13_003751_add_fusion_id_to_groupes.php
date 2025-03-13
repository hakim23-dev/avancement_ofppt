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
        Schema::table('groupes', function (Blueprint $table) {
            $table->unsignedBigInteger('fusion_id');
            $table->foreign('fusion_id')->references('id')->on('fusions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('groupes', function (Blueprint $table) {
            //
        });
    }
};

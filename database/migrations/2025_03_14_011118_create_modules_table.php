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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->String('code_module');
            $table->String('nom_module');
            $table->enum('regional',['O','N']);
            $table->integer('MHT_presentiel');
            $table->integer('MHT_sync');
            $table->integer('NB_CC');
            $table->boolean('EFM_realisation');
            $table->boolean('EFM_validation');
            $table->unsignedBigInteger('formateur_pres_id');
            $table->foreign('formateur_pres_id')->references('id')->on('formateurs')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('formateur_sync_id');
            $table->foreign('formateur_sync_id')->references('id')->on('formateurs')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('filiere_id');
            $table->foreign('filiere_id')->references('id')->on('filieres')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('semestre',['S1','S2']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};

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
        Schema::create('demande_admissions', function (Blueprint $table) {
            $table->primary(['idCand', 'idSpec']);
            $table->unsignedBigInteger('idCand');
            $table->unsignedBigInteger('idSpec');
            $table->foreign('idCand')->references('idCand')->on('candidats');
            $table->foreign('idSpec')->references('idSpec')->on('specialites');
            $table->string('diplomeCand');
            $table->string('mentionCand');
            $table->string('niveauCand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_admissions');
    }
};

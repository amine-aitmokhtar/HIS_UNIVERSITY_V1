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
        Schema::create('candidats', function (Blueprint $table) {
            $table->id('idCand');
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('idUser')->on('users');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateNaiss');
            $table->string('villeNaiss');
            $table->string('telephone');
            $table->string('adresse');
            $table->string('pays');
            $table->integer('codePostal');
            $table->string('ville');
            $table->integer('anneeBac');
            $table->integer('scoreBac');
            $table->string('serieBac');
            $table->string('nomLycee');
            $table->string('langueMat1');
            $table->string('langueMat2');
            $table->string('niveauFr');
            $table->string('niveauEn');
            $table->string('situationCand');
            $table->string('cinnaissHis');
            $table->binary('photoPDF');
            $table->binary('idPDF');
            $table->binary('note_trimestre_PDF');
            $table->binary('note_bac_PDF');
            $table->binary('diplome_bac_PDF');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};

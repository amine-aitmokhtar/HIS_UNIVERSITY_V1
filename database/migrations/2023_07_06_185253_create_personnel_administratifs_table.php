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
        Schema::create('personnel_administratifs', function (Blueprint $table) {
            $table->id('idPersoAdm');
            $table->string('nom');
            $table->string('prenom');
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('idUser')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnel_administratifs');
    }

    public function before()
    {
        return [
            'App\Migrations\2023_07_05_231336_create_etudiant_table',
        ];
    }
};

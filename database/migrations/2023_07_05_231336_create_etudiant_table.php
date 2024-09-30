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
        Schema::create('etudiants', function (Blueprint $table) {

                $table->id('idEtd');
                $table->string('matricule');
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
        Schema::dropIfExists('etudiant');
    }
    public function before()
    {
        return [
            'App\Migrations\2014_10_12_000000_create_users_table.php',
        ];
    }
};




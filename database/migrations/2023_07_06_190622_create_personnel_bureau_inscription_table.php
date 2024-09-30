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
        Schema::create('personnel_bureau_inscription', function (Blueprint $table) {
            $table->id('idPersoBi');
            $table->unsignedBigInteger('idPersoAdm');
            $table->foreign('idPersoAdm')->references('idPersoAdm')->on('personnel_administratifs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnel_bureau_inscription');
    }
};

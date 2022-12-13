<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Realisations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisations', function (Blueprint $table) {
            $table->id('id');
            $table->string('photo')->nullable();
            $table->string('titre');
            $table->string('descriptif');
            $table->unsignedBigInteger('id_utilisateur');
            $table->dateTime('dateDebut');  
            $table->dateTime('dateFin');
            $table->dateTime('dateParticipation');
            $table->timestamps();

            $table->foreign('id_utilisateur')->references('id')->on('utilisateurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realisations');
    }
};

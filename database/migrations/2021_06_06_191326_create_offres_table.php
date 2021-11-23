<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('intitule');
            $table->string('genre');
            $table->string('type_contrat');
            $table->string('age');
            $table->string('secteur'); 
            $table->string('niveau_etude');
            $table->integer('nb_experience');
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->unsignedBigInteger('domaine_activite_id');
            $table->foreign('domaine_activite_id')->references('id')->on('domaine_activites');
            $table->unsignedBigInteger('competence_id');
            $table->foreign('competence_id')->references('id')->on('competences');
            $table->unsignedBigInteger('etablissement_id');
            $table->foreign('etablissement_id')->references('id')->on('etablissements');
            $table->unsignedBigInteger('diplome_id');
            $table->foreign('diplome_id')->references('id')->on('diplomes');
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('villes');
            $table->unsignedBigInteger('poste_id');
            $table->foreign('poste_id')->references('id')->on('postes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcoursProfessionnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcours_professionnels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_entreprise');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->unsignedBigInteger('poste_id');
            $table->foreign('poste_id')->references('id')->on('postes');
            $table->unsignedBigInteger('domaine_activite_id');
            $table->foreign('domaine_activite_id')->references('id')->on('domaine_activites');
            $table->string('description');
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
        Schema::dropIfExists('parcours_professionnels');
    }
}

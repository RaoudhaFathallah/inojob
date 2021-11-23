<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcoursAcademiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcours__academiques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('niveau_etude');
            $table->unsignedBigInteger('etablissement_id');
            $table->foreign('etablissement_id')->references('id')->on('etablissements');
            $table->unsignedBigInteger('diplome_id');
            $table->foreign('diplome_id')->references('id')->on('diplomes');
            $table->unsignedBigInteger('specialite_id');
            $table->foreign('specialite_id')->references('id')->on('specialites');
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
        Schema::dropIfExists('parcours__academiques');
    }
}

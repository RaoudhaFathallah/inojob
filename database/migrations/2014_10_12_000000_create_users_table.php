<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('role_id')->default(2);
            $table->string('name');
            $table->string('prenom');
            $table->integer('tel');
            $table->string('etat_civil');
            $table->string('image');
            $table->string('experience');
            $table->string('type_emploi');
            $table->string('email')->unique();
            $table->integer('status')->nullable();
            $table->integer('region_id')->nullable();
            $table->integer('domaine_activite_id')->nullable();
            $table->integer('parcours_professionnel_id')->nullable();
            $table->string('genre');
            $table->string('poste');
            $table->string('salaire');
            $table->date('datenaissance');
            $table->string('nb_experience');
            $table->string('entreprise');
            $table->string('rc');
            $table->string('siteweb');
            $table->string('description');
            $table->date('date_inscription');

            //$table->integer('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

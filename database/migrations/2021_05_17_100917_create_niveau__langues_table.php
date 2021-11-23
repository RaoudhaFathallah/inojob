<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNiveauLanguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveau__langues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('langue_id')->unsigned();
            $table->foreign('langue_id')->references('id')->on('langues')->onDelete('cascade');
            $table->integer('niveau_id')->unsigned();
            $table->foreign('niveau_id')->references('id')->on('niveaux')->onDelete('cascade');
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
        Schema::dropIfExists('niveau__langues');
    }
}

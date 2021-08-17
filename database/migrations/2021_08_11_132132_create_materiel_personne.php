<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterielPersonne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiel_personnes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('materiel_id')->unsigned();
            $table->bigInteger('personne_id')->unsigned();
            $table->foreign('materiel_id')->references('id')->on('materiels');
            $table->foreign('personne_id')->references('id')->on('personnes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiel_personnes');
    }
}

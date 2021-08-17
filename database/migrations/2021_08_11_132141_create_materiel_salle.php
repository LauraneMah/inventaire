<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterielSalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiel_salles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('materiel_id')->unsigned();
            $table->bigInteger('salle_id')->unsigned();
            $table->foreign('materiel_id')->references('id')->on('materiels');
            $table->foreign('salle_id')->references('id')->on('salles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiel_salles');
    }
}

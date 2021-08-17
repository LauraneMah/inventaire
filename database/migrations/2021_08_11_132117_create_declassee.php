<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclassee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declassees', function (Blueprint $table) {
            $table->id();
            $table->integer('stock');
            $table->string('motive');
            $table->bigInteger('materiel_id')->unsigned();
            $table->foreign('materiel_id')->references('id')->on('materiels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('declassees');
    }
}

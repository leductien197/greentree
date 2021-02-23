<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_diseases', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('trees_id')->unsigned();
            $table->foreign('trees_id')->references('id')->on('trees');
            $table->string('code');
            $table->string('name');
            $table->string('img');
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
        Schema::dropIfExists('plant_diseases');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('trees_id')->unsigned();
            $table->foreign('trees_id')->references('id')->on('trees');
            $table->string('comment')->nullable();
            $table->string('title');
            $table->string('symptom');
            $table->text('content');
            $table->integer('hot');
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
        // Schema::dropIfExists('news');
    }
}

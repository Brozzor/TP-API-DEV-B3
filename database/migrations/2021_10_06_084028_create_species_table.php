<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('species', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('classification');
            $table->integer('designation');
            $table->string('average_height');
            $table->string('skin_colors');
            $table->string('hair_colors');
            $table->string('eye_colors');
            $table->string('average_lifespan');
            $table->string('homeworld');
            $table->string('language');
            $table->timestamp();
            $table->string('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('species');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotPeopleFilmsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pivot_people_films', function (Blueprint $table) {
			$table->timestamps();
			$table->unsignedBigInteger('people_id');
			$table->unsignedBigInteger('film_id');

			$table->foreign('people_id')->references('id')->on('peoples')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->foreign('film_id')->references('id')->on('films')
				->onDelete('cascade')
				->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('pivot_people_films');
	}
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCircleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('circle', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('caption', 15);
			$table->string('details');
			$table->longText('image');
			$table->string('link');
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
		Schema::drop('circle');
	}

}

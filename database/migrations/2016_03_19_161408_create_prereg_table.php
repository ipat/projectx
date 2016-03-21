<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreregTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prereg', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('subject_id')->nullable();
			$table->integer('number')->nullable();
			$table->integer('prereg1')->nullable();
			$table->integer('prereg2')->nullable();
			$table->integer('prereg3')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prereg');
	}

}

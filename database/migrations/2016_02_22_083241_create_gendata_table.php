<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGendataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gendata', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('student_id')->nullable();
			$table->string('name')->nullable();
			$table->string('parent')->nullable();
			$table->integer('subject_id')->nullable();
			$table->integer('depth')->nullable();
			$table->integer('year')->nullable();
			$table->integer('realyear')->nullable();
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
		Schema::drop('gendata');
	}

}

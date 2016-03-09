<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenmapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('genmap', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('student_id')->nullable();
			$table->integer('year')->nullable();
			$table->integer('realyear')->nullable();
			$table->integer('subject_id1')->nullable();
			$table->integer('subject_id2')->nullable();
			$table->integer('subject_id3')->nullable();
			$table->integer('subject_id4')->nullable();
			$table->integer('subject_id5')->nullable();
			$table->integer('subject_id6')->nullable();
			$table->integer('subject_id7')->nullable();
			$table->integer('subject_id8')->nullable();
			$table->integer('subject_id9')->nullable();
			$table->integer('subject_id10')->nullable();
			$table->integer('subject_id11')->nullable();
			$table->integer('subject_id12')->nullable();
			$table->integer('subject_id13')->nullable();
			$table->integer('subject_id14')->nullable();
			$table->integer('subject_id15')->nullable();
			$table->text('comment')->nullable();
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
		Schema::drop('genmap');
	}

}

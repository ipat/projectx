<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('articles_id');
			$table->integer('subject_id');->nullable();
			$table->string('title');->nullable();
			$table->text('body1');->nullable();
			$table->text('body2');->nullable();
			$table->text('body3');->nullable();
			$table->text('body4');->nullable();
			$table->text('comment');->nullable();
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
		Schema::drop('articles');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('name_first')->nullable();
			$table->string('name_last')->nullable();
			$table->string('faculty')->nullable();
			$table->string('major')->nullable();
			$table->integer('student_id')->nullable();
			$table->string('subject')->nullable();
			$table->integer('admin_id')->nullable();
			$table->rememberToken();
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
		Schema::drop('users');
	}

}

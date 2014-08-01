<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//what needs to be done to the database when executing the migration

		Schema::create('users', function($t) {
          $t->increments('id');
          $t->string('username', 50);
          $t->string('email', 100);
          $t->text('comment');
          $t->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//used when rolling back ar undoing the migrations
		Schema::drop('users);

	}

}

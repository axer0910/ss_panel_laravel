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
		Schema::create('user', function(Blueprint $table)
		{
			$table->increments('uid');
			$table->string('user_name');
			$table->string('email')->unique();
			$table->string('pass', 60);
			$table->string('passwd',30);
            $table->bigInteger('t');
            $table->bigInteger('u');
            $table->bigInteger('d');
            $table->string('plan',20);
            $table->bigInteger('transfer_enable');
            $table->Integer('port');
            $table->Integer('switch');
            $table->Integer('enable');
            $table->string('type');
            $table->dateTime('exp_date');
            $table->string('ref_by');
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

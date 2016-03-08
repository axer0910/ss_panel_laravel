<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsCodeTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ss_code_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code_type');
            $table->integer('code_expdays');
            $table->bigInteger('code_transfer');
            $table->string('code_type_name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ss_code_types');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsNodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ss_nodes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('node_name');
            $table->string('node_type');
            $table->string('node_server');
            $table->string('node_method');
            $table->string('node_info');
            $table->integer('node_status');
            $table->integer('node_order');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ss_nodes');
	}

}

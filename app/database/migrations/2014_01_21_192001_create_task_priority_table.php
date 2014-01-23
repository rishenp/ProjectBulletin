<?php

use Illuminate\Database\Migrations\Migration;

class CreateTaskPriorityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates task_priority table
        Schema::create('task_priority', function($table)
        {   
        	$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('priority');                       			                      
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('task_priority');
	}

}
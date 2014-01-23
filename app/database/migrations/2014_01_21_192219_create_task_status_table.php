<?php

use Illuminate\Database\Migrations\Migration;

class CreateTaskStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates task_status table
        Schema::create('task_status', function($table)
        {   
        	$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('status');                       			                      
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('task_status');
	}

}
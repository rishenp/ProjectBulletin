<?php

use Illuminate\Database\Migrations\Migration;

class CreateTaskNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates task_notes table
        Schema::create('task_notes', function($table)
        {   
        	$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('description');
			$table->integer('task_id')->unsigned()->nullable();
        	$table->integer('user_id')->unsigned()->nullable();           
          /*  $table->foreign('task_id')->references('id')->on('tasks');
            $table->foreign('user_id')->references('id')->on('users');*/
            $table->timestamp('created_at');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('task_notes');
	}

}
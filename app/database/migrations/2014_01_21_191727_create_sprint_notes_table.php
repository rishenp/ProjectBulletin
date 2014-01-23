<?php

use Illuminate\Database\Migrations\Migration;

class CreateSprintNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates sprint_notes table
        Schema::create('sprint_notes', function($table)
        {   
        	$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('description');
			$table->integer('sprint_id')->unsigned()->nullable();
        	$table->integer('user_id')->unsigned()->nullable();           
            /*$table->foreign('sprint_id')->references('id')->on('sprints');
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
		Schema::drop('sprint_notes');
	}


}
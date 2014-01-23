<?php

use Illuminate\Database\Migrations\Migration;

class CreateSprintGoalsTsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates sprint_goals table
        Schema::create('sprint_goals', function($table)
        {   
        	$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('description');                       
			$table->integer('sprint_id')->unsigned()->nullable();
            // $table->foreign('sprint_id')->references('id')->on('sprints');                       
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sprint_goals');
	}

}
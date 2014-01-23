<?php

use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates tasks table
        Schema::create('tasks', function($table)
        {   
        	$table->engine = 'InnoDB';
            $table->increments('id');            
            $table->string('description');
            $table->string('definition');
            $table->integer('estimated_points');
            $table->integer('actual_points');

			$table->integer('status_id')->unsigned()->nullable();
        	$table->integer('creater_id')->unsigned()->nullable();
            $table->integer('owner_id')->unsigned()->nullable();
            $table->integer('project_id')->unsigned()->nullable();
            $table->integer('sprint_id')->unsigned()->nullable();
            $table->integer('priority_id')->unsigned()->nullable();

            /*$table->foreign('status_id')->references('id')->on('task_status');
            $table->foreign('creater_id')->references('id')->on('users');
            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('sprint_id')->references('id')->on('sprints');
            $table->foreign('priority_id')->references('id')->on('task_priority');*/

            $table->dateTime('created_at');
            $table->dateTime('end_date');
            
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
	}

}
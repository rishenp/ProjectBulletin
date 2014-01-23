<?php

use Illuminate\Database\Migrations\Migration;

class AddReferences extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
        {                                  
            $table->foreign('team_id')->references('id')->on('team');
            $table->foreign('job_title_id')->references('id')->on('job_title');
            $table->foreign('department_id')->references('id')->on('department');
        });


        Schema::table('projects', function($table)
        {   
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('project_manager_id')->references('id')->on('users');
            $table->foreign('team_id')->references('id')->on('team');
            $table->foreign('status_id')->references('id')->on('project_status'); 
        });

        Schema::table('project_notes', function($table)
        {           	         
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users');           
        });


        Schema::table('project_users', function($table)
        {   
        	$table->unique(array('project_id','user_id'));          
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users');
        });

      
        Schema::table('sprints', function($table)
        {   
        	$table->foreign('team_id')->references('id')->on('team');
        });

 
        Schema::table('sprint_goals', function($table)
        {   
        	$table->foreign('sprint_id')->references('id')->on('sprints');                       
        });

        Schema::table('sprint_notes', function($table)
        {   
        	   
            $table->foreign('sprint_id')->references('id')->on('sprints');
            $table->foreign('user_id')->references('id')->on('users');          
        });

        Schema::table('sprint_users', function($table)
        {           	
        	$table->unique(array('sprint_id','user_id'));          
            $table->foreign('sprint_id')->references('id')->on('sprints');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('tasks', function($table)
        {   
        	$table->foreign('status_id')->references('id')->on('task_status');
            $table->foreign('creater_id')->references('id')->on('users');
            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('sprint_id')->references('id')->on('sprints');
            $table->foreign('priority_id')->references('id')->on('task_priority');
        });

        Schema::table('task_notes', function($table)
        {   
        	$table->foreign('task_id')->references('id')->on('tasks');
            $table->foreign('user_id')->references('id')->on('users');
        });
	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
<?php

use Illuminate\Database\Migrations\Migration;

class CreateProjectUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates project_users table
        Schema::create('project_users', function($table)
        {   
        	$table->engine = 'InnoDB';
            $table->increments('id');
			$table->integer('project_id')->unsigned()->index();
        	$table->integer('user_id')->unsigned()->index(); 
        	/*$table->unique(array('project_id','user_id'));          
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users');*/
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_users');
	}

}
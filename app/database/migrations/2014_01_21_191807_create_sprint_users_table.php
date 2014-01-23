<?php

use Illuminate\Database\Migrations\Migration;

class CreateSprintUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates sprint_users table
        Schema::create('sprint_users', function($table)
        {   
        	$table->engine = 'InnoDB';
            $table->increments('id');
			$table->integer('sprint_id')->unsigned()->index();
        	$table->integer('user_id')->unsigned()->index(); 
        	/*$table->unique(array('sprint_id','user_id'));          
            $table->foreign('sprint_id')->references('id')->on('sprints');
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
		Schema::drop('sprint_users');
	}

}
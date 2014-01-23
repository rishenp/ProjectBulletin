<?php

use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		 // Creates team table
        Schema::create('team', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');            
            $table->timestamp('created_at');
        });

        // Creates job title table
        Schema::create('job_title', function($table)
        {
        	$table->engine = 'InnoDB';
        	$table->increments('id');
        	$table->string('title');
        });

        // Create department table
        Schema::create('department', function($table)
        {
        	$table->engine = 'InnoDB';
        	$table->increments('id');
        	$table->string('name');
        });


		// Adding more fields to the users table		
        Schema::table('users', function($table)
        {                      
            $table->integer('team_id')->unsigned()->index()->nullable();
            $table->integer('job_title_id')->unsigned()->nullable();
            $table->integer('department_id')->unsigned()->nullable();

            /*$table->foreign('team_id')->references('id')->on('team');
            $table->foreign('job_title_id')->references('id')->on('job_title');
            $table->foreign('department_id')->references('id')->on('department');*/
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('team');
        Schema::drop('job_title');
        Schema::drop('department');

        Schema::table('users', function($table)
        {
        	$table->dropColume('team_id');
        	$table->dropColume('job_title_id');
        	$table->dropColume('department_id');

        });
	}

}
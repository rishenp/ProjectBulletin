<?php

use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates projects table
        Schema::create('projects', function($table)
        {   
        	$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('description');

			$table->integer('client_id')->unsigned()->nullable();
        	$table->integer('project_manager_id')->unsigned()->nullable();
            $table->integer('team_id')->unsigned()->nullable();
            $table->integer('status_id')->unsigned()->nullable();

           /* $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('project_manager_id')->references('id')->on('users');
            $table->foreign('team_id')->references('id')->on('team');
            $table->foreign('status_id')->references('id')->on('project_status');
*/
            $table->dateTime('created_at');
            $table->dateTime('deadline');
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
		Schema::drop('projects');
	}

}
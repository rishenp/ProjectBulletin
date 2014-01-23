<?php

use Illuminate\Database\Migrations\Migration;

class CreateProjectNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates project_notes table
        Schema::create('project_notes', function($table)
        {   
        	$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('description');
			$table->integer('project_id')->unsigned()->nullable();
        	$table->integer('user_id')->unsigned()->nullable();           
            
            /*$table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users');
 */           
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
		Schema::drop('project_notes');
	}


}
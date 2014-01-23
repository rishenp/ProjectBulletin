<?php

use Illuminate\Database\Migrations\Migration;

class CreateSprintsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates sprints table
        Schema::create('sprints', function($table)
        {   
        	$table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('duration');
			$table->integer('team_id')->unsigned()->nullable();
            /*$table->foreign('team_id')->references('id')->on('team');  */                     
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sprints');
	}

}
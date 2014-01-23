<?php

use Illuminate\Database\Migrations\Migration;

class CreateProjectStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates client table
        Schema::create('project_status', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('status');
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
		Schema::drop('project_status');
	}

}
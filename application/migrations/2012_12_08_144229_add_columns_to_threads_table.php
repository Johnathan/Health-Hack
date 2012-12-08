<?php

class Add_Columns_To_Threads_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('threads', function($table) {
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients');
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('threads', function($table) {
            $table->drop_foreign('threads_patient_id_foreign');
        });
	}

}
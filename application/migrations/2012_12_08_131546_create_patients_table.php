<?php

class Create_Patients_Table {

	public function up()
    {
		Schema::create('patients', function($table) {
			$table->increments('id');
			$table->string( 'name' );
			$table->string( 'address' );
			$table->integer( 'gp_id' );
			$table->timestamps();
		});

    }

	public function down()
    {
		Schema::drop('patients');
    }

}

<?php

class Create_Patient_Meta_Table {

	public function up()
    {
		Schema::create('patient_meta', function($table) {
			$table->increments('id');
			$table->string( 'type' );
			$table->string( 'value' );
			$table->timestamps();
	});

    }

	public function down()
    {
		Schema::drop('patient_meta');

    }

}

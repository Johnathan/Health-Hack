<?php

class Create_Gp_Table {

	public function up()
    {
		Schema::create('gps', function($table) {
			$table->increments('id');
			$table->string( 'name' );
			$table->timestamps();
	});

    }

	public function down()
    {
		Schema::drop('gps');
    }

}

<?php

class Create_User_Table {

	public function up()
    {
		Schema::create('user', function($table) {
			$table->increments('id');
			$table->string( 'type' );
			$table->string( 'name' );
			$table->timestamps();
	});

    }

	public function down()
    {
		Schema::drop('user');

    }

}

<?php

class Create_Messages_Table {

	public function up()
    {
		Schema::create('messages', function($table) {
			$table->increments('id');
			$table->string( 'message' );
			$table->integer( 'owner' );
			$table->timestamps();
		});
    }

	public function down()
    {
		Schema::drop('messages');
    }

}

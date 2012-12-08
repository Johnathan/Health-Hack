<?php

class Create_Threads_Table {

	public function up()
    {
		Schema::create('threads', function($table) {
			$table->increments('id');
			$table->string( 'title' );
			$table->integer( 'gp_id' );
			$table->timestamps();
		});
    }

	public function down()
    {
		Schema::drop('threads');
    }

}

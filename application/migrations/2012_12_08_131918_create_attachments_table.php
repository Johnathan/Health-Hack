<?php

class Create_Attachments_Table {

	public function up()
    {
		Schema::create('attachments', function($table) {
			$table->increments('id');
			$table->string( 'title' );
			$table->integer( 'owner' );
			$table->string( 'location' );
			$table->string( 'type' );
			$table->timestamps();
		});
    }

	public function down()
    {
		Schema::drop('attachments');
    }

}

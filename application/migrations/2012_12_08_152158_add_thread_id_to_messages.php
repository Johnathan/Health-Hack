<?php

class AdD_Thread_Id_To_Messages {

	public function up()
    {
		Schema::table('messages', function($table)
		{
			$table->integer( 'thread_id' );
		});

    }
}

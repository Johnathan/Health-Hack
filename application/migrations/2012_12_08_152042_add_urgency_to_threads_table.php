<?php

class Add_Urgency_To_Threads_Table {

	public function up()
    {
		Schema::table('threads', function($table)
		{
			$table->string( 'urgency' );
			$table->string( 'status' );
		});

    }
}

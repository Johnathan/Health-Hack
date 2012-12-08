<?php

class AdD_User_Id_To_Messages_Table {

	public function up()
    {
		Schema::table('messages', function($table)
		{
			$table->integer( 'user_id' );
			$table->drop_column(array( 'owner' ));
		});

	}
}

<?php

class Add_User_Id_To_Attachments {

	public function up()
    {
		Schema::table('attachments', function($table)
		{
			$table->integer( 'user_id' );
			$table->drop_column(array( 'owner' ));
		});
    }
}

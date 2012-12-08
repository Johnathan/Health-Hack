<?php

class Remove_Owner_Id_From_Threads_Table {

	public function up()
    {
		Schema::table('threads', function($table) {
			$table->integer( 'user_id' );
			$table->drop_column(array( 'gp_id' ));
		});
    }
}

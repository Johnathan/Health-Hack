<?php

class Add_User_Id_To_Patients_Table {

	public function up()
    {
		Schema::table('patients', function($table)
		{
			$table->integer( 'user_id' );
		});
    }
}

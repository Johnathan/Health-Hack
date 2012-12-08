<?php

class Add_Patient_Id_To_Patient_Meta_Talbe {

	public function up()
    {
		Schema::table('patient_meta', function($table)
		{
			$table->integer( 'patient_id' );
		});

    }
}

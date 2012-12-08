<?php

class Add_Fields_To_Patients_Table {

	public function up()
    {
		Schema::table('patients', function($table)
		{
			$table->date( 'date_of_birth' );
			$table->string( 'gender' );
			$table->string( 'medical_history' );
			$table->string( 'medication' );
			$table->string( 'allergies' );
		});
    }
}

<?php

class RemovE_Gp_Id_From_Patients_Table {

	public function up()
    {
		Schema::table('patients', function($table) {
			$table->drop_column(array( 'gp_id' ));
		});

    }
}

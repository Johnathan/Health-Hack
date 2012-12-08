<?php

class Add_Avatar_To_Patients {

	/**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function($table) {
            $table->string('avatar');
        });
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function($table) {
            $table->drop_column('avatar');
        });
    }

}
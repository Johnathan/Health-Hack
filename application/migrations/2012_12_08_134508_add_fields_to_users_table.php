<?php

class Add_Fields_To_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table) {
            $table->string('email')->unique();
            $table->string('password');
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table) {
            $table->drop_column('email');
            $table->drop_column('password');
        });
	}

}
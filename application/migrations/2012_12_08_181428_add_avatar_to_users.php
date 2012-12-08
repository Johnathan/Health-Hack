<?php

class Add_Avatar_To_Users {

	/**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->string('avatar')->nullable();
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
            $table->drop_column('avatar');
        });
    }

}
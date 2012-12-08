<?php

class Add_Fields_To_Threads {

	/**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('threads', function($table) {
            $table->text('message');
        });
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('threads', function($table) {
            $table->drop_column('message');
        });
    }

}
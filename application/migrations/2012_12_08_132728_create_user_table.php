<?php

class Create_User_Table {

    public function up()
    {
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string( 'type' );
            $table->string( 'name' );
            $table->timestamps();
       });

    }

    public function down()
    {
        Schema::drop('users');
    }

}

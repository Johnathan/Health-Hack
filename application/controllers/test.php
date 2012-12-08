<?php

class Test_Controller extends Base_Controller
{
	public function action_index()
	{
		echo '<pre>';
		$user = User::find( 1 );

		$user->save();

		print_r( $user->patients()->get() );
	}

	public function action_add_patient()
	{
		$user = User::find( 1 );
		$user->patients()->save(array(
			array( 'name' => 'Pete Hawkins' )
		));
	}
}

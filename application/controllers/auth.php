<?php

class Auth_Controller extends Base_Controller
{
    public $restful = true;

    public function get_login() {
        return View::make('auth.login');
    }

    public function post_login() {
        // Validate the users credentials
        $login_validation = Validator::make(Input::all(), array('email' => 'required|email', 'password' => 'required'));

        if ($login_validation->fails()) {
            return Redirect::to('login')
                ->with_input('only', array('email'))
                ->with_errors($login_validation);
        }

        // Validate the user
        $credentials = array('username' => Input::get('email'), 'password' => Input::get('password'));

        if ( ! Auth::attempt($credentials))
        {
             // User login failed
             return Redirect::to('login')
                ->with_input('only', array('email'))
                ->with('login_error', 'Your email / password is incorrect');
        }

        // Go to the admin section
        return Redirect::to('patients');
    }

	public function get_register()
	{
        return View::make('auth.register');
	}

	public function post_register()
	{
		$rules = array(
			'name' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required'
		);

		$validation = Validator::make( Input::all(), $rules );

		if( $validation->passes() )
		{
			$user = User::create(array(
				'type' => 'gp',
				'name' => Input::get( 'name' ),
				'email' => Input::get( 'email' ),
				'password' => Hash::make( Input::get( 'password' ) )
			));

			$user->save();

			Auth::login( $user->id );
			return Redirect::to( '/' );
		}
		else
		{
			return Redirect::to( 'register' )->with_errors( $validation->errors )->with_input();
		}
	}

    public function get_logout() {
        // Log the user out
        Auth::logout();

        // Show the login screen
        return Redirect::to('login');
    }

}

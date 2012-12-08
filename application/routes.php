<?php

/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/

// Stylesheets
Asset::add('layout-styles', 'css/layout.css');
// Asset::container('admin')->add('boostrap', 'css/bootstrap.min.css');
// Asset::container('admin')->add('boostrap-responsive', 'css/bootstrap-responsive.min.css', 'boostrap');
// Asset::container('admin')->add('admin-layout-styles', 'css/admin/layout.css', 'boostrap-responsive');


// JavaScripts
// Asset::container('admin')->add('jquery', 'js/jquery-1.8.2.min.js');
// Asset::container('admin')->add('bootstrap-js', 'js/bootstrap.min.js', 'jquery');


/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', array('as' => 'homepage', function()
{
    return View::make('home.index');
}));


/*
|--------------------------------------------------------------------------
| App Routes
|--------------------------------------------------------------------------
*/

Route::get('patients', array('as' => 'patients', 'before' => 'auth', function()
{
    return View::make('patients.index');
}));


Route::get('patients/(:any)', array('before' => 'auth', function($patient_id)
{
    return View::make('patients.show');
}));


Route::get('patients/(:any)/threads/(:any)', array('before' => 'auth', function($patient_id, $thread_id)
{
    return View::make('patients.threads.show');
}));


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

//
// Logout
Route::get('logout', array('as' => 'logout', function() {
    // Log the user out
    Auth::logout();

    // Show the login screen
    return Redirect::to('login');
}));


//
// Login form
Route::get('login', array('as' => 'login', function() {
    return View::make('auth.login');
}));


//
// Login action
Route::post('login', function() {
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
});

//This should be taken out later
Route::controller(Controller::detect());


/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
    return Response::error('404');
});

Event::listen('500', function()
{
    return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|       Route::filter('filter', function()
|       {
|           return 'Filtered!';
|       });
|
| Next, attach the filter to a route:
|
|       Router::register('GET /', array('before' => 'filter', function()
|       {
|           return 'Hello World!';
|       }));
|
*/

Route::filter('before', function()
{
    // Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
    // Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
    if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
    if (Auth::guest()) return Redirect::to('login');
});

<?php

/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/

// Stylesheets
Asset::add('bootstrap-styles', 'css/bootstrap.min.css');
Asset::add('bootstrap-responsive', 'css/bootstrap-responsive.min.css', 'bootstrap-styles');
Asset::add('layout-styles', 'css/layout.css', 'bootstrap-responsive');
Asset::add('profile-styles', 'css/profile.css', 'layout-styles');
// Asset::container('admin')->add('boostrap', 'css/bootstrap.min.css');
// Asset::container('admin')->add('boostrap-responsive', 'css/bootstrap-responsive.min.css', 'boostrap');
// Asset::container('admin')->add('admin-layout-styles', 'css/admin/layout.css', 'boostrap-responsive');


// JavaScripts
Asset::add('bootstrap-js', 'js/bootstrap.min.js');
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

Route::get('patients', array('as' => 'patients', 'before' => 'auth', 'uses' => 'patients@index'));
Route::get('patients/(:num)/threads/new', array('before' => 'auth', 'uses' => 'threads@create'));
Route::post('patients/(:num)/threads/new', array('before' => 'auth', 'uses' => 'threads@create'));
Route::get('patients/(:num)', array('before' => 'auth', 'uses' => 'patients@show'));
Route::get('patients/(:num)/threads/(:num)', array('before' => 'auth', 'uses' => 'threads@show'));
Route::post('patients/(:num)/threads/(:num)/messages', array('before' => 'auth', 'uses' => 'messages@new'));


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('logout', array('as' => 'logout', 'uses' => 'auth@logout'));
Route::get('login', array('as' => 'login', 'uses' => 'auth@login'));
Route::get('register', array('as' => 'register', 'uses' => 'auth@register'));
Route::post('register', array('as' => 'register', 'uses' => 'auth@register'));
Route::post('login', array('uses' => 'auth@login'));


// Autoload controllers
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

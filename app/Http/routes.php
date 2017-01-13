<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
| http://laravel.com/docs/5.1/authentication
| http://laravel.com/docs/5.1/authorization
| http://laravel.com/docs/5.1/routing
| http://laravel.com/docs/5.0/schema
| http://socialiteproviders.github.io/
|
*/

// PAGE ROUTE ALIASES


Route::get('/', function () {
    return view('index');
});
Route::get('nav', function () {
    return view('partials.nav');
});
Route::get('/index', function () {
    return view('/');
});

// ALL AUTHENTICATION ROUTES - HANDLED IN THE CONTROLLERS
Route::controllers([
	'auth' 		=> 'Auth\AuthController',
	'password' 	=> 'Auth\PasswordController',
]);

// REGISTRATION EMAIL CONFIRMATION ROUTES
Route::get('/resendEmail', 'Auth\AuthController@resendEmail');
Route::get('/activate/{code}', 'Auth\AuthController@activateAccount');

// LARAVEL SOCIALITE AUTHENTICATION ROUTES
Route::get('/social/redirect/{provider}', [
	'as' 	=> 'social.redirect',
	'uses' 	=> 'Auth\AuthController@getSocialRedirect'
]);
Route::get('/social/handle/{provider}', [
	'as' 	=> 'social.handle',
	'uses' 	=> 'Auth\AuthController@getSocialHandle'
]);


Route::get('logout', function () {
    return redirect('auth/logout');
});
//Route::get('register', function () {
   // return redirect('auth/register');
//});
Route::get('reset', function () {
    return redirect('password/email');
});

// USER PAGE ROUTES - RUNNING THROUGH AUTH MIDDLEWARE
Route::group(['middleware' => 'auth'], function () {

	// HOMEPAGE ROUTE
	Route::get('/home', [
	    'as' 		=> 'user',
	    'uses' 		=> 'UserController@index'
	]);

	// INCEPTIONED MIDDLEWARE TO CHECK TO ALLOW ACCESS TO CURRENT USER ONLY
	Route::group(['middleware'=> 'currentUser'], function () {
			Route::resource(
				'profile',
				'ProfilesController', [
					'only' 	=> [
						'show',
						'edit',
						'update'
					]
				]
			);
	});
	Route::get('profile/{username}', [
		'as' 		=> '{username}',
		'uses' 		=> 'ProfilesController@show'
	]);

	Route::get('dashboard/profile/{username}', [
		'as' 		=> '{username}',
		'uses' 		=> 'ProfilesController@show'
	]);

});

// ADMINISTRATOR ACCESS LEVEL PAGE ROUTES - RUNNING THROUGH ADMINISTRATOR MIDDLEWARE
Route::group(['middleware' => 'administrator'], function () {

	// TEST ROUTE ONLY ROUTE
	Route::get('administrator', function () {
	    echo 'Welcome to your ADMINISTRATOR page '. Auth::user()->email .'.';
	});

	// SHOW ALL USERS PAGE ROUTE
	Route::resource('users', 'UsersManagementController');
	Route::get('users', [
		'as' 			=> '{username}',
		'uses' 			=> 'UsersManagementController@showUsersMainPanel'
	]);

	// EDIT USERS PAGE ROUTE
	Route::get('edit-users', [
		'as' 			=> '{username}',
		'uses' 			=> 'UsersManagementController@editUsersMainPanel'
	]);


});

// EDITOR ACCESS LEVEL PAGE ROUTES - RUNNING THROUGH EDITOR MIDDLEWARE
Route::group(['middleware' => 'editor'], function () {

	//TEST ROUTE ONLY
	Route::get('editor', function () {
	    echo 'Welcome to your EDITOR page '. Auth::user()->email .'.';
	});

});
Route::get('/login-influencer', function () {
    return view('auth.login-influencer');
});

Route::get('/login-advertiser', function () {
    return view('auth.login-advertiser');
});
Route::get('/signup-influencer', function () {
    return view('auth.signup-influencer');
});
Route::get('/signup-advertiser', function () {
    return view('auth.signup-advertiser');
});

//***************************************************************************************//
//***************************** USER ROUTING EXAMPLES BELOW *****************************//
//***************************************************************************************//

// //** OPTION - ALL FOLLOWING ROUTES RUN THROUGH AUTHETICATION VIA MIDDLEWARE **//
// Route::group(['middleware' => 'auth'], function () {

// 	// OPTION - GO DIRECTLY TO TEMPLATE
// 	Route::get('/', function () {
// 	    return view('pages.home');
// 	});

// 	// OPTION - USE CONTROLLER
// 	Route::get('/', [
// 	    'as' 			=> 'user',
// 	    'uses' 			=> 'UsersController@index'
// 	]);

// });

// //** OPTION - SINGLE ROUTE USING A CONTROLLER AND AUTHENTICATION VIA MIDDLEWARE **//
// Route::get('/', [
//     'middleware' 	=> 'auth',
//     'as' 			=> 'user',
//     'uses' 			=> 'UsersController@index'
// ]);
Route::get('profile', 'UserController@profile');
Route::match(['get', 'post'], 'update_avatar', [
		'uses' 			=> 'UserController@update_avatar'
]);
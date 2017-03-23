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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});



Route::group(['middleware' => 'web'], function () {
    Route::auth();

	Route::get('/home', 'HomeController@index');

	Route::get('/Dashboard1', 'DashboardsController@admin');
	Route::get('/Dashboard2', 'DashboardsController@sales');


    Route::resource('PropertyStates','PropertyStatesController');
	Route::resource('PropertyTypes','PropertyTypesController');

	//Route::resource('Properties','PropertiesController');



	//Route::get('PropertyStatus', 'PropertyStatusController@index');


	Route::get('/PropertyStatus/{id}/destroy', [
		'uses' => 'PropertyStatesController@destroy',
		'as' => 'PropertyStates.destroy'
		]
	);

	Route::get('/PropertyTypes/{id}/destroy', [
		'uses' => 'PropertyTypesController@destroy',
		'as' => 'PropertyTypes.destroy'
		]
	);


});

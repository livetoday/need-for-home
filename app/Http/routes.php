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

$app->group([
		'prefix' => 'backend',
		'namespace' => 'App\Http\Controllers\Backend'
	], 

	function () use ($app) {
		$app->get('/', "DashboardController@index");
    	$app->get('pages/list', "PagesController@getList");
    	$app->get('pages/manage', "PagesController@manage");
	}
);

$app->get('/', function() use ($app) {
    return $app->welcome();
});

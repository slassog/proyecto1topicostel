<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('database-test', function(){
	if( DB::connection()->getDatabaseName())
	{
		echo 'Connected succesfully to database' , DB::connection()->getDatabaseName();
	}
});

Route::get('contacts', function(){
	$contacts = App\Contact::all();

	echo '<pre>';
	print_r($contacts);
	echo '</pre>';
});
Auth::routes();

Route::get('/home', 'HomeController@index');

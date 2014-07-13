<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//index route
Route::get('/', function()
{
	return View::make('index');
});
//test route
/*
Route::get('first',function(){
	return "first!!";
});
*/

//lorem ipsum start page
Route::get('lorem-ipsum',function(){
	return View::make('loremipsum');
});
//proccessed lorem ipsum
Route::post('lorem-ipsum',function(){
	return View::make('loremipsum');
});

//random user generator start page

Route::get('user-generator',function(){
	return View::make('usergenerator');
});

Route::post('user-generator',function(){
	return "You filled out the form!!";
});



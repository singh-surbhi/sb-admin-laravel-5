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

Route::get('/', function()
{
	return View::make('pages/home');
});
Route::get('/home', function()
{
	return View::make('pages/home');
});

Route::get('/team', function()
{
	return View::make('pages/team');
});
Route::get('/technology', function()
{
	return View::make('pages/technology');
});
Route::get('/contact', function()
{
	return View::make('pages/contact');
});
Route::get('/open-source', function()
{
	return View::make('pages/open-source');
});
Route::get('/seperate-page', function()
{
	return View::make('pages/seperate-page');
});
Route::get('/service', function()
{
	return View::make('pages/service');
});

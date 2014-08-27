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
	return View::make('pages/index');
});

Route::get('/posterjack', function()
{
	return View::make('pages/posterjack');
});

Route::get('/molson', function()
{
	return View::make('pages/molson');
});

Route::get('/rbc', function()
{
	return View::make('pages/rbc');
});

Route::get('/su2c', function()
{
	return View::make('pages/su2c');
});
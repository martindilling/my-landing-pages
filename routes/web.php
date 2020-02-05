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

$ext = app()->isLocal() ? '.test' : '';

Route::domain('dilling.co'.$ext)->group(function () {
	Route::view('/', 'dilling_co.welcome');
});


Route::domain('martindilling.com'.$ext)->group(function () {
	Route::view('/', 'martindilling_com.welcome');
});


Route::domain('camilladilling.com'.$ext)->group(function () {
	Route::view('/', 'camillagejl_com.welcome');
});


Route::domain('camillagejl.com'.$ext)->group(function () {
	Route::view('/', 'camillagejl_com.welcome');
});

Route::get('/', function () {
    abort(404);
});

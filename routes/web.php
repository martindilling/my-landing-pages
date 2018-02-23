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

Route::domain('dilling.test')->group(function () {
	Route::get('/', function () {
		return view('dilling_co.welcome');
	});
});

Route::domain('martindilling.test')->group(function () {
	Route::get('/', function () {
		return view('martindilling_com.welcome');
	});
});

Route::domain('camillagejl.test')->group(function () {
	Route::get('/', function () {
		return view('camillagejl_com.welcome');
	});
});

Route::get('/', function () {
    return view('welcome');
});

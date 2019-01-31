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

Route::get('/loginAdmin',[
	'uses' => 'LoginController@index',
	'as' => 'login']);


Route::get('/pagetest', 'PagesController@index')->name('pagetest');
Route::get('/AHome',[
	'uses' => 'AdminController@halamanAdmin',
	'as' => 'homeadmin']);

Route::get('/AHome/createa',[
	'uses' => 'AdminController@index',
	'as' => 'create.admin']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

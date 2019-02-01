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

// awal
Route::get('/AHome',[
	'uses' => 'AdminController@halamanAdmin',
	'as' => 'homeadmin']);

// admin
Route::get('/AHome/createa',[
	'uses' => 'AdminController@index',
	'as' => 'create.admin']);

Route::post('/AHome/createa',[
	'uses' => 'AdminController@store',
	'as' => 'create.newadmin']);

// class
Route::get('/Ahome/class', [
	'uses' => 'ClassController@index',
	'as' => 'admin.class']);

Route::get('/AHome/class/createc',[
	'uses' => 'ClassController@create',
	'as' => 'create.class']);

Route::post('/AHome/class/createc',[
	'uses' => 'ClassController@store',
	'as' => 'create.newclass']);

// gallery
Route::get('/AHome/gallery',[
	'uses' => 'GalleryController@index', 
	'as' => 'admin.gallery']);

// book
Route::get('/AHome/book',[
	'uses' => 'BookController@index', 
	'as' => 'admin.book']);

Route::get('/AHome/book/create',[
	'uses' => 'BookController@create', 
	'as' => 'admin.newbook']);

Route::post('/AHome/book/create',[
	'uses' => 'BookController@store',
	'as' => 'admin.createbook']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

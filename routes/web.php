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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
 return view ('frontend.index');
});

Route::get('/listing', 'listingPageController@index');
Route::get('/details', 'DetailsPageController@index');

// for admin acess to the backend
Route::group(['prefix' => 'backend' ,'middleware' => 'auth'], function(){
   
    Route::get('/', 'Admin\DashboardController@index');
    Route::get('/category', 'Admin\CategoryController@index');
    Route::get('/category/create', 'Admin\CategoryController@create');
    Route::get('/category/edit', 'Admin\CategoryController@edit');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

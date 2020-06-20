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


Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();
// chats
Route::get('restaurant', 'datarestaurantcontroller@view');
Route::get('hotel', 'datahotelcontroller@view');
Route::get('transaksi', 'transaksicontroller@view');
Route::get('/chat', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

Route::get('/', 'IndexController@index');
Route::group(['prefix' => 'profile'], function() {
    Route::get('/', 'ProfileController@viewprofile');
    Route::post('update', 'ProfileController@postprofile');
});
Route::group(['prefix' => 'activity'], function() {
    Route::get('/', 'ActivityController@viewactivity');
    Route::get('getlogs', 'ActivityController@getlog');
});
Route::group(['prefix' => 'manajemen-user', 'middleware' => 'role:root'], function() {
    Route::get('/user', 'ManajemenUserController@viewuser');
    Route::get('/logs', 'ManajemenUserController@viewlogs');
    Route::get('/getlogs', 'ManajemenUserController@getlog');
    Route::get('/add-user', 'ManajemenUserController@viewadduser');
    Route::post('/add-roles', 'ManajemenUserController@postroles');
    Route::post('/add-permission', 'ManajemenUserController@postpermission');
    Route::post('/add-users', 'ManajemenUserController@postusers');
    Route::get('/getuser', 'ManajemenUserController@getdatauser');
});


Route::get('/home', 'HomeController@index')->name('home');

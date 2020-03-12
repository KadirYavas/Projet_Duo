<?php

use Illuminate\Support\Facades\Route;

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
})->name('homepage');

Route::get('administrationAvatar', 'AvatarController@index')->name('adminAvatar');
Route::get('ajoutAvatar', 'AvatarController@create')->name('ajoutAvatar');
Route::post('envoiAvatar', 'AvatarController@store')->name('envoiAvatar');
Route::get('editAvatar/{id}', 'AvatarController@edit')->name('editAvatar');
Route::post('updateAvatar/{id}', 'AvatarController@update')->name('updateAvatar');
Route::get('destroyAvatar/{id}', 'AvatarController@destroy')->name('destroyAvatar');
Route::get('downloadAvatar/{id}', 'AvatarController@download')->name('download');

Route::get('administrationUser', 'UserController@index')->name('adminUser');

Route::get('ajoutUser', 'UserController@create')->name('ajoutUser');
Route::post('envoiUser', 'UserController@store')->name('envoiUser');
Route::get('editUser/{id}', 'UserController@edit')->name('editUser');
Route::post('updateUser/{id}', 'UserController@update')->name('updateUser');
Route::get('destroyUser/{id}', 'UserController@destroy')->name('destroyUser');

//IMAGES
Route::get('/home/images' , 'PictureController@index')->name('listeImage');
Route::get('/home/images/create' , 'PictureController@create')->name('createImage');
Route::post('/home/images/create/store' , 'PictureController@store')->name('storeImage');

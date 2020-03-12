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

//AVATAR
Route::get('administrationAvatar', 'AvatarController@index')->name('adminAvatar');
Route::get('ajoutAvatar', 'AvatarController@create')->name('ajoutAvatar');
Route::post('envoiAvatar', 'AvatarController@store')->name('envoiAvatar');
Route::get('editAvatar/{id}', 'AvatarController@edit')->name('editAvatar');
Route::post('updateAvatar/{id}', 'AvatarController@update')->name('updateAvatar');
Route::get('destroyAvatar/{id}', 'AvatarController@destroy')->name('destroyAvatar');
Route::get('downloadAvatar/{id}', 'AvatarController@download')->name('downloadAvatar');

//USER
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

//ENTREPRISE
Route::get('administrationEntreprise', 'EntrepriseController@index')->name('adminEntreprise');
Route::get('ajoutEntreprise', 'EntrepriseController@create')->name('ajoutEntreprise');
Route::post('envoiEntreprise', 'EntrepriseController@store')->name('envoiEntreprise');
Route::get('editEntreprise/{id}', 'EntrepriseController@edit')->name('editEntreprise');
Route::post('updateEntreprise/{id}', 'EntrepriseController@update')->name('updateEntreprise');
Route::get('destroyEntreprise/{id}', 'EntrepriseController@destroy')->name('destroyEntreprise');
Route::get('downloadEntreprise/{id}', 'EntrepriseController@download')->name('downloadEntreprise');
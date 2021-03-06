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
Route::get('editPicture/{id}', 'PictureController@edit')->name('editImage');
Route::post('updatePicture/{id}', 'PictureController@update')->name('updateImage');
Route::get('destroyPicture/{id}', 'PictureController@destroy')->name('destroyImage');
Route::get('downloadPicture/{id}', 'PictureController@download')->name('downloadImage');

//CATEGORIES
Route::get('/home/categories' , 'CategoryController@index')->name('listeCategory');
Route::get('/home/categories/create' , 'CategoryController@create')->name('createCategory');
Route::post('/home/categories/create/store' , 'CategoryController@store')->name('storeCategory');
Route::get('/home/categories/edit/{id}' , 'CategoryController@edit')->name('editCategory');
Route::post('/home/categories/edit/update/{id}' , 'CategoryController@update')->name('updateCategory');
Route::get('/home/categories/edit/destroy/{id}' , 'CategoryController@destroy')->name('destroyCategory');

//ENTREPRISE
Route::get('administrationEntreprise', 'EntrepriseController@index')->name('adminEntreprise');
Route::get('ajoutEntreprise', 'EntrepriseController@create')->name('ajoutEntreprise');
Route::post('envoiEntreprise', 'EntrepriseController@store')->name('envoiEntreprise');
Route::get('editEntreprise/{id}', 'EntrepriseController@edit')->name('editEntreprise');
Route::post('updateEntreprise/{id}', 'EntrepriseController@update')->name('updateEntreprise');
Route::get('destroyEntreprise/{id}', 'EntrepriseController@destroy')->name('destroyEntreprise');
Route::get('downloadEntreprise/{id}', 'EntrepriseController@download')->name('downloadEntreprise');

//ROLES
Route::get('administrationRoles', 'RoleController@index')->name('adminRole');
Route::get('ajoutRoles', 'RoleController@create')->name('ajoutRole');
Route::post('envoiRoles', 'RoleController@store')->name('envoiRole');
Route::get('editRoles/{id}', 'RoleController@edit')->name('editRole');
Route::post('updateRoles/{id}', 'RoleController@update')->name('updateRole');
Route::get('destroyRoles/{id}', 'RoleController@destroy')->name('destroyRole');

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

Route::get('/master', function () {
    return view('layout/master');
});

Route::get('ajoutAvatar', 'AvatarController@create')->name('ajoutAvatar');
Route::post('envoiAvatar', 'AvatarController@store')->name('envoiAvatar');

Route::get('ajoutUser', 'UserController@create')->name('ajoutUser');
Route::post('envoiUser', 'UserController@store')->name('envoiUser');

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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'MonControlleur@index');
Route::get('/utilisateur/{id}', 'MonControlleur@utilisateur')->where('id','[0-9]+');
Route::get('/annonces', 'MonControlleur@annonces');
Route::get('/annonce/{id}', 'MonControlleur@annonce');
Route::get('/creer-annonce', 'MonControlleur@creerAnnonce')->name('creerAnnonce');


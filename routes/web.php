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

Route::get('/', 'CountryController@zoek');
Route::get('/error');

Route::get('/artist/{id}', 'ArtistController@show')->name('artist');
Route::get('/song/{id}', 'SongController@show')->name('song');
Route::get('/country/{id}', 'CountryController@show')->name('country');

Route::any('/searchconcert', 'ConcertController@zoek')->name('searchconcert');
Route::post('/searchartist', 'ArtistController@zoek');

Route::get('/concert')->name('concert');
Route::get('/country');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

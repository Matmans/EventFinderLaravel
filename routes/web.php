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

Route::post('/searchconcert', 'ConcertController@zoek');
Route::post('/searchartist', 'ArtistController@zoek');

Route::get('/concert');
Route::get('/country');
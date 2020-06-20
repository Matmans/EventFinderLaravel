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
Route::get('/genre/{id}', 'GenreController@show')->name('genre');

Route::any('/searchconcert', 'ConcertController@zoek')->name('searchconcert');
Route::post('/searchartist', 'ArtistController@zoek');
Route::post('/searchresults');

Route::any('/favartistadd/{artist_id}', 'Fav_artistController@check');
Route::any('/favartistdelete/{artist_id}', 'Fav_artistController@delete');

Route::any('/concertwishlistadd/{concert_id}', 'Concert_wishlistController@check');
Route::any('/concertwishlistdelete/{concert_id}', 'Concert_wishlistController@delete');
Route::any('/pastconcerts', 'Concert_wishlistController@past');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

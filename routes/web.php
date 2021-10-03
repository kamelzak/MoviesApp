<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MoviesController@index')->name('movies.index');
Route::get('/movies/{id}', 'App\Http\Controllers\MoviesController@show')->name('movies.show');

Route::get('/shows', 'App\Http\Controllers\TvShowsController@index')->name('shows.index');
Route::get('/shows/{id}', 'App\Http\Controllers\TvShowsController@show')->name('shows.show');

Route::get('/actors', 'App\Http\Controllers\ActorsController@index')->name('actors.index');
Route::get('/actors/page/{page?}', 'App\Http\Controllers\ActorsController@index');
Route::get('/actors/{id}', 'App\Http\Controllers\ActorsController@show')->name('actors.show');


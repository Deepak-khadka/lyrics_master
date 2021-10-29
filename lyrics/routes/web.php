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

Route::get('/', function () {
    return view('index');
});

Route::resources([
            'artist'=>'ArtistController',
            'album'=>'AlbumController',
            'genre'=>'GenreController',
             'tracks'=> 'TracksController',
    ]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add','HomeController@add');





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
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/tweets', 'TweetsController@store')->name('tweets.store');

    Route::get('/profiles/{user:name}', 'ProfilesController@show')->name('profile');
    Route::get('/profiles/{user:name}/edit', 'ProfilesController@edit')->name('profiles.edit');

    Route::post('/profiles/{user:name}/follow', 'FollowsController@store')->name('follows.store');
    Route::delete('/profiles/{user:name}/follow', 'FollowsController@destroy')->name('follows.destroy');
});

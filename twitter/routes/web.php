<?php

use App\Tweet;
use Illuminate\Http\Request;

Auth::routes();

// ページの表示
Route::get('/', 'TweetsController@index');
Route::get('/explore', 'TweetsController@explore');
Route::get('/account/{account}', 'UsersController@account');
Route::get('/following/{following_id}', 'FollowsController@following');
Route::get('/followers/{followers_id}', 'FollowsController@followers');

// ツイートの操作
Route::post('/tweets', 'TweetsController@store');

// ユーザー情報の操作
Route::post('users/update', 'UsersController@update');

// フォロー情報の更新
Route::post('follows/follow', 'FollowsController@follow');


// 使ってない
// Route::delete('/tweet/{tweet}', 'TweetsController@destroy');
// Route::get('/home', 'HomeController@index')->name('home');
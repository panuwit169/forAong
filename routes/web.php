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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/post/new', 'PostController@newPost');
Route::post('/comment', 'CommentController@newComment');
Route::delete('/post/delete','PostController@deletePost');

Route::get('/test', 'HomeController@test');



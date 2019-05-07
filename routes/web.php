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

Route::get('/', 'PostController@all');

Route::get('/posts/{post}', 'PostController@single');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/{any}', 'AdminController@index')->where('any', '.*');

Route::get('/employer/{any}', 'EmployerController@index')->where('any', '.*');

Route::resource('/user', 'UserController');

Route::get('/{post}/comments', 'CommentController@index');
Route::post('/{post}/comments', 'CommentController@store');

Route::get('/viewtasks', 'TaskController@all');

Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::resource('tasks', 'TaskController', [
        'only' => [
            'index', 'store', 'update'
        ]
    ]);

});
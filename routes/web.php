<?php

Route::get('/', 'PostsController@index')->name('home');
Route::get('posts/create', 'PostsController@create');
Route::post('posts', 'PostsController@store');
Route::get('posts/{post}', 'PostsController@show');

Route::post('posts/{post}/create', 'CommentsController@store');

Route::get('author/{user}', 'AuthorsController@show');

Route::get('home', 'DashboardController@index')->name('dashboard');

Route::get('register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('login', 'SessionsController@create');
Route::post('login', 'SessionsController@store');
Route::get('logout', 'SessionsController@destroy');
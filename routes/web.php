<?php

Route::get('/', 'PostsController@index');
Route::get('posts/create', 'PostsController@create');
Route::post('posts', 'PostsController@store');

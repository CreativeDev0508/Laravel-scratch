<?php

Route::get('/', 'PostsController@index');
Route::get('posts/{post}', 'PostsController@show');
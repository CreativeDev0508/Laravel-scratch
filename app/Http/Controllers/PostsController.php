<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }

    public function show()
    {
    	return view('posts.show');
    }
}

<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	// Method 1
    	// $post = new Post;

    	// $post->title = request('title');
    	// $post->body = request('body');

    	// $post->save();
    	
    	// Method 2
    	// Post::create([
    	// 	'body' => request('body'),
    	// 	'title' => request('title')
    	// ]);
    	
    	// Method 3
    	Post::create(request(['title', 'body']));

    	return redirect('/');
    }
}

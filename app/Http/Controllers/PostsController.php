<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->get();

    	return view('posts.index', compact('posts'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function store()
    {
    	// Validation
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);

    	

    	// Store - Method 1
    	// $post = new Post;

    	// $post->title = request('title');
    	// $post->body = request('body');

    	// $post->save();
    	
    	// Store - Method 2
    	// Post::create([
    	// 	'body' => request('body'),
    	// 	'title' => request('title')
    	// ]);
    	
    	// Store - Method 3
    	Post::create(request(['title', 'body']));

    	return redirect('/');
    }
}
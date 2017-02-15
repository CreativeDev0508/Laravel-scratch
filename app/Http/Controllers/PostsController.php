<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except([
			'index',
			'show'
		]);
	}

    public function index()
    {
    	$posts = Post::latest()->paginate(3);

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
        dd(request()->all());
    	// Validation
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);

    	auth()->user()->publish(
    		new Post(request([
    			'title',
    			'body'
    		]))
    	);

    	return redirect('/');
    }
}

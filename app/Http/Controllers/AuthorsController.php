<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function show(User $user)
    {
    	$posts = $user->posts()->latest()->get();

    	return view('posts.index', compact('posts'));
    }
}

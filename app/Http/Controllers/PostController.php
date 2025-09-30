<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $name = 'Matiss';
        $posts = \App\Models\Post::all();
        return view('posts.index', ['name' => $name, 'posts' => $posts]);
    }
}

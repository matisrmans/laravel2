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

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        \App\Models\Post::create($data);

        return redirect('/posts');
    }

    public function find($id){
        $post = \App\Models\Post::find($id);
        return view('posts.show', ['post' => $post]);
    }


}

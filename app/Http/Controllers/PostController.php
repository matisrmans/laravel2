<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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

    public function show(Post $post){
        return view('posts.show', ['post' => $post]);
    }

    public function delete($id){
        Post::destroy($id);
        return redirect('/posts');
    }


}

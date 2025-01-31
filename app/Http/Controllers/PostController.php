<?php

namespace App\Http\Controllers;

use App\Models\Post;

use App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    //
    public function show($id)
    {
        $post = Post::with('comments')->find($id);
        return view('posts.show', compact('post'));
    }
}

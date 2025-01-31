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
}

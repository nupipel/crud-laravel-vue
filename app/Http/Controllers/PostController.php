<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            'page' => 'blog',
            'post' => Post::all(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('singleblog', [
            'page' => 'blog',
            'post'  => $post,
        ]);
    }
}

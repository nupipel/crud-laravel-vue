<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            'page' => 'blog',
            'post' => Posts::all()
        ]);
    }

    public function show($slug)
    {
        return view('singleblog', [
            'page' => 'blog',
            'post'  => Posts::find($slug),
        ]);
    }
}

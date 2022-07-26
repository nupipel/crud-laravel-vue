<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('category', [
            'page'  => 'blog',
            'posts' => $category->posts,
            'category' => $category->name,
        ]);
    }
}

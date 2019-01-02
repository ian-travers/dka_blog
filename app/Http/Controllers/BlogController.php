<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function category($slug)
    {
        /* @var Category $category */
        $category = Category::where('slug', $slug)->firstOrFail();

        return view('blog.category', [
            'category' => $category,
            'articles' => $category->articles()->where('published', 1)->paginate(12),
        ]);
    }

    public function article($slug)
    {
        return view('blog.article', [
            'article' => Article::where('slug', $slug)->firstOrFail(),
        ]);
    }
}

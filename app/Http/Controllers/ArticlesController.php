<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::with('category');
        $categories = Category::all();

        if ($request->has('category_id') && $request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        $articles = $query->get();

        return view('articles.index', compact('articles', 'categories'));
    }
}

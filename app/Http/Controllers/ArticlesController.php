<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::with('category');
        $categories = Category::all();

        if ($request->has('category_id') && $request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        $articles = $query->paginate(6);

        return view('articles.index', compact('articles', 'categories'));
    }

    public function show($slug)
    {
        $article = Article::with(['category', 'comments'])->where('slug', $slug)->firstOrFail();
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'slug' => 'nullable|string|max:255|unique:articles,slug',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }


        if (empty($validated['slug'])) {
            $slug = Str::slug($validated['title']);

            $slugCount = Article::where('slug', $slug)->count();
            if ($slugCount > 0) {

                $slug .= '-' . time();
            }
        } else {
            $slug = $validated['slug'];
        }


        Article::create([
            'title' => $validated['title'],
            'author' => $validated['author'],
            'image' => 'images/' . $imageName,
            'content' => $validated['content'],
            'start_article' => Str::limit($validated['content'], 100),
            'slug' => $slug,
            'category_id' => $validated['category_id'],
        ]);


        return redirect()->route('articles.show', $slug)->with('success', 'Article created successfully');
    }

    public function edit($slug)
    {
        $article = Article::with('category')->where('slug', $slug)->firstOrFail();
        $categories = Category::all();

        return view('articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, $slug)
    {

        $article = Article::where('slug', $slug)->firstOrFail();


        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',

        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $article->image = 'images/' . $imageName;
        }


        $article->title = $validated['title'];
        $article->author = $validated['author'];
        $article->content = $validated['content'];
        $article->slug = $slug;
        $article->category_id = $validated['category_id'];
        $article->save();


        return redirect()->route('articles.show', $article->slug)->with('success', 'Article updated successfully');
    }

    public function destroy($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully');
    }
}

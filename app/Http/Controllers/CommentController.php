<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        $articles = Article::with('comments')->get();

        return view('comments.index', compact('articles'));
    }

    public function delete($id)
    {
        return view('comments.delete', compact('id'));
    }
}

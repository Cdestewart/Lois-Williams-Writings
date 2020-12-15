<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {

        $articles = Article::all();

        return view('articles.index', $articles);
    }
}

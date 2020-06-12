<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        return view('articles.index');
    }


    public function create()
    {
        return view('articles.create');

    }

    public function store(Request $request)
    {
        //
    }

    public function show(Article $article)
    {

    }


    public function edit(Article $article)
    {
        //
    }
    public function update(Request $request, Article $article)
    {
        //
    }

    public function destroy(Article $article)
    {
        //
    }
}
